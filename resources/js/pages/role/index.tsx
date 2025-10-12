import RoleController from '@/actions/App/Http/Controllers/RoleController';
import DeleteButton from '@/components/buttons/delete-button';
import EditButton from '@/components/buttons/edit-button';
import TableCompound from '@/components/compounds/table-compound';
import ConfirmInputDialog from '@/components/dialogs/confirm-input-dialog';
import FormDialog from '@/components/dialogs/form-dialog';
import NoSearchFound from '@/components/fallbacks/no-search-found';
import SearchFilter from '@/components/inputs/search-filter';
import DefaultPaginator from '@/components/paginators/default-paginator';
import { useCan } from '@/hooks/use-can';
import AppLayout from '@/layouts/app-layout';
import { notifyToast } from '@/lib/hot-notification/notify-toast';
import { FormAbility, type BreadcrumbItem } from '@/types';
import { Permission } from '@/types/permission/permission-type';
import { Role, RoleProps } from '@/types/role/role-type';
import { Head, router, useForm } from '@inertiajs/react';
import { FormEventHandler, useState } from 'react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Roles',
        href: '/roles',
    },
];

export default function Index({ roles, filter }: RoleProps) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Roles" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="flex justify-end p-1">
                    <RoleFormDialog formAbility='create' />
                </div>
                <div className="flex justify-start p-1">
                    <SearchFilter url={RoleController.index().url} filter={filter} searchLimit={false} />
                </div>
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 md:min-h-min md:p-5 dark:border-sidebar-border">
                    {roles.data.length > 0 && (
                        <>
                            <RoleTable roles={roles} />
                            <DefaultPaginator meta={roles.meta} filter={filter} />
                        </>
                    )}
                    {roles.data.length === 0 && (
                        <NoSearchFound title={filter.search} />
                    )}
                </div>
            </div>
        </AppLayout>
    );
}

function RoleTable({ roles }: { roles: RoleProps['roles'] }) {
    const can = useCan();
    return (
        <TableCompound>
            <TableCompound.Caption>A list of the roles.</TableCompound.Caption>
            <TableCompound.Header>
                <TableCompound.Row>
                    <TableCompound.Head>ID</TableCompound.Head>
                    <TableCompound.Head>Name</TableCompound.Head>
                    <TableCompound.Head>Permissions</TableCompound.Head>
                    <TableCompound.Head>Created</TableCompound.Head>
                    <TableCompound.Head>Actions</TableCompound.Head>
                </TableCompound.Row>
            </TableCompound.Header>
            <TableCompound.Body>
                {roles.data.map((role) => (
                    <TableCompound.Row key={role.id}>
                        <TableCompound.Cell>{role.id}</TableCompound.Cell>
                        <TableCompound.Cell>{role.name.replaceAll('_', ' ')}</TableCompound.Cell>
                        <TableCompound.Cell>{role.created_at}</TableCompound.Cell>

                        <TableCompound.Cell>
                            <PermissionsCell permissions={role.permissions} />
                        </TableCompound.Cell>

                        <TableCompound.Cell className="flex w-[max-content] items-center gap-2">

                            {role.can_be.permission_updated && (
                                <span>
                                    {can?.role_update && (
                                        <EditButton onClick={() => router.visit(RoleController.editPermission(role.id))}>Edit permissions</EditButton>
                                    )}
                                </span>
                            )}

                            {role.can_be.updated && (
                                <span>
                                    {can?.role_update && (
                                        <RoleFormDialog formAbility='edit' role={role} />
                                    )}
                                </span>
                            )}
                            {role.can_be.deleted && (
                                <span>
                                    {can?.role_delete && (
                                        <ConfirmInputDialog
                                            title="Deleting role"
                                            reference={role.name.trim()}
                                            onConfirm={() => {
                                                router.delete(RoleController.destroy(role.id), {
                                                    preserveScroll: true,
                                                    onError: () => {
                                                        notifyToast.error('Failed to delete');
                                                    },
                                                });
                                            }}
                                        >
                                            <DeleteButton>Delete</DeleteButton>
                                        </ConfirmInputDialog>
                                    )}
                                </span>
                            )}
                        </TableCompound.Cell>
                    </TableCompound.Row>
                ))}
            </TableCompound.Body>
        </TableCompound>
    );
}
function PermissionsCell({ permissions }: { permissions: Permission[] }) {
    const [expanded, setExpanded] = useState(false);

    const visiblePermissions = expanded ? permissions : permissions.slice(0, 3); // show first 3 only
    const count: boolean = permissions.length > 1;
    return (
        <div className="flex max-w-[250px] transform flex-wrap items-center gap-2 transition-all duration-300">
            {visiblePermissions.map((permission) => (
                <div key={permission.id}>
                    <span className="rounded-full px-2 text-primary capitalize underline dark:text-white">
                        {permission.name.replaceAll('_', ' ')}
                    </span>
                    {count && ','}
                </div>
            ))}
            {permissions.length > 3 && (
                <button onClick={() => setExpanded(!expanded)} className="cursor-pointer text-sm text-blue-600 hover:underline">
                    {expanded ? 'Show less' : `+${permissions.length - 3} more`}
                </button>
            )}
        </div>
    );
}

type RoleFormDialogProps = {
    formAbility: FormAbility;
    role?: Role;
}
type RoleFormType = {
    name: string
}
function RoleFormDialog({ formAbility, role }: RoleFormDialogProps) {
    const [open, setOpen] = useState<boolean>(false);
    const { data, setData, errors, post, put } = useForm<RoleFormType>({
        name: role ? role.name : '',
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        // setOpen(true);
        if (formAbility === "create") {
            post(RoleController.store().url, {
                onSuccess: () => {
                    setOpen(false);

                }
            })
        }
        if (formAbility === "edit") {
            put(RoleController.update({ role: role?.id as number }).url, {
                onSuccess: () => {
                    setOpen(false);

                }
            })
        }
    }
    return (
        <FormDialog
            onSubmit={submit}
            formAbility={formAbility}
            open={open}
            onOpenChange={setOpen}
            title={formAbility === "edit" ? 'Edit' : 'Create role'}
            triggerName={formAbility === "edit" ? 'Edit' : 'Create'}
        >
            <div className='mb-3 space-x-1.5'>
                <FormDialog.Label label='Name' required />
                <FormDialog.Input value={data.name} onChange={(e) => setData('name', e.target.value)} />
                <FormDialog.InputError message={errors.name} />
            </div>
            <FormDialog.Button>
                {formAbility === "edit" ? 'Save' : 'Submit'}
            </FormDialog.Button>
        </FormDialog>
    );
}
