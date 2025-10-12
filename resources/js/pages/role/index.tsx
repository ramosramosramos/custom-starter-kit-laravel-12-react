import RoleController from '@/actions/App/Http/Controllers/RoleController';
import DeleteButton from '@/components/buttons/delete-button';
import EditButton from '@/components/buttons/edit-button';
import TableCompound from '@/components/compounds/table-compound';
import ConfirmInputDialog from '@/components/dialogs/confirm-input-dialog';
import DefaultPaginator from '@/components/paginators/default-paginator';
import { useCan } from '@/hooks/use-can';
import AppLayout from '@/layouts/app-layout';
import { notifyToast } from '@/lib/hot-notification/notify-toast';
import { type BreadcrumbItem } from '@/types';
import { Permission } from '@/types/permission/permission-type';
import { RoleProps } from '@/types/role/role-type';
import { Head, router } from '@inertiajs/react';
import { useState } from 'react';

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
                    {/* <AddButton onClick={() => router.visit(RoleController.create())}>Create</AddButton> */}
                </div>
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 md:min-h-min md:p-5 dark:border-sidebar-border">
                    {roles.data.length > 0 && (
                        <>
                            <RoleTable roles={roles} />
                            <DefaultPaginator meta={roles.meta} filter={filter} />
                        </>
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

                            {role.can_be.updated && (
                                <span>
                                    {can?.role_update && (
                                        <EditButton onClick={() => router.visit(RoleController.editPermission(role.id))}>Edit permissions</EditButton>
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

    return (
        <div className="flex max-w-[250px] transform flex-wrap items-center gap-2 transition-all duration-300">
            {visiblePermissions.map((permission) => (
                <div key={permission.id}>
                    <span className="rounded-full px-2 text-primary capitalize underline dark:text-white">
                        {permission.name.replaceAll('_', ' ')}
                    </span>
                    ,
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
