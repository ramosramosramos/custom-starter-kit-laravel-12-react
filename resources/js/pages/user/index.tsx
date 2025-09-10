import UserController from '@/actions/App/Http/Controllers/UserController';
import AddButton from '@/components/buttons/add-button';
import DeleteButton from '@/components/buttons/delete-button';
import EditButton from '@/components/buttons/edit-button';
import TableCompound from '@/components/compounds/table-compound';
import ConfirmInputDialog from '@/components/dialogs/confirm-input-dialog';
import DefaultPaginator from '@/components/paginators/default-paginator';
import { useCan } from '@/hooks/use-can';
import AppLayout from '@/layouts/app-layout';
import { notifyToast } from '@/lib/hot-notification/notify-toast';
import { type BreadcrumbItem } from '@/types';
import { Permission, UserProps } from '@/types/user/user-type';
import { Head, router } from '@inertiajs/react';
import { useState } from 'react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/users',
    },
];

export default function Index({ users, filter }: UserProps) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Users" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="flex justify-end p-1">
                    <AddButton onClick={() => router.visit(UserController.create())}>Create</AddButton>
                </div>
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 md:min-h-min md:p-5 dark:border-sidebar-border">
                    {users.data.length > 0 && (
                        <>
                            <UserTable users={users} />
                            <DefaultPaginator meta={users.meta} filter={filter} />
                        </>
                    )}
                </div>
            </div>
        </AppLayout>
    );
}

function UserTable({ users }: { users: UserProps['users'] }) {
    const can = useCan();
    return (
        <TableCompound>
            <TableCompound.Caption>A list of the users.</TableCompound.Caption>
            <TableCompound.Header>
                <TableCompound.Row>
                    <TableCompound.Head>ID</TableCompound.Head>
                    <TableCompound.Head>Name</TableCompound.Head>
                    <TableCompound.Head>Email</TableCompound.Head>
                    <TableCompound.Head>Role</TableCompound.Head>
                    <TableCompound.Head>Permissions</TableCompound.Head>
                    <TableCompound.Head>Actions</TableCompound.Head>
                </TableCompound.Row>
            </TableCompound.Header>
            <TableCompound.Body>
                {users.data.map((user) => (
                    <TableCompound.Row key={user.id}>
                        <TableCompound.Cell>{user.id}</TableCompound.Cell>
                        <TableCompound.Cell>{user.name}</TableCompound.Cell>
                        <TableCompound.Cell>{user.email}</TableCompound.Cell>
                        <TableCompound.Cell>{user.role}</TableCompound.Cell>
                        <TableCompound.Cell>
                            <PermissionsCell permissions={user.permissions} />
                        </TableCompound.Cell>

                        <TableCompound.Cell className="flex w-[max-content] items-center gap-2">
                            {user.can_be.updated && (
                                <span>
                                    {can?.user_update && (
                                        <EditButton onClick={() => router.visit(UserController.editPermission(user.id))}>Edit Permissions</EditButton>
                                    )}
                                </span>
                            )}
                            {user.can_be.updated && (
                                <span>
                                    {can?.user_update && (
                                        <EditButton onClick={() => router.visit(UserController.edit(user.id))}>Edit Info</EditButton>
                                    )}
                                </span>
                            )}
                            {user.can_be.deleted && (
                                <span>
                                    {can?.user_delete && (
                                        <ConfirmInputDialog
                                            title="Deleting user"
                                            reference={user.name.trim()}
                                            onConfirm={() => {
                                                router.delete(UserController.destroy(user.id), {
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
                    <span className="rounded-full  px-2 text-primary dark:text-white  capitalize underline">{permission.name.replaceAll('_', ' ')}</span>,
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
