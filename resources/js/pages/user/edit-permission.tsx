import UserController from '@/actions/App/Http/Controllers/UserController';
import { TypographyH2, TypographyH4 } from '@/components/typography/shadcn-typography';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Permission, User } from '@/types/user/user-type';

import { Head, useForm } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [{ title: 'Edit User Permissions', href: '' }];

type PermissionFormType = {
    permissions: string[]; // store names only
};

export default function Edit({ user, permissions }: { user: User; permissions: Permission[] }) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Edit User" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 p-2 md:min-h-min md:p-5 dark:border-sidebar-border">
                    <TypographyH2 className="mb-5">{user.name}</TypographyH2>
                    <TypographyH4 className="mb-5">User Permissions</TypographyH4>
                    <PermissionForm user={user} permissions={permissions} />
                </div>
            </div>
        </AppLayout>
    );
}

function PermissionForm({ user, permissions }: { user: User; permissions: Permission[] }) {
    const { data, setData, put, processing } = useForm<PermissionFormType>({
        permissions: user.permissions.map((p) => p.name),
    });

    const togglePermission = (name: string, checked: boolean) => {
        setData('permissions', checked ? [...data.permissions, name] : data.permissions.filter((pid) => pid !== name));
    };

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        put(UserController.updatePermission({ user: user.id }).url);
    };
    return (
        <form onSubmit={handleSubmit} className="space-y-6">
            <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                {permissions.map((permission) => (
                    <div key={permission.id} className="flex items-center gap-2">
                        <Checkbox
                            id={`perm-${permission.id}`}
                            checked={data.permissions.includes(permission.name)}
                            onCheckedChange={(checked) => togglePermission(permission.name, Boolean(checked))}
                        />
                        <label htmlFor={`perm-${permission.id}`} className="text-sm">
                            {permission.name}
                        </label>
                    </div>
                ))}
            </div>
            <div className="flex justify-end">
                <Button type="submit" disabled={processing}>
                    Save
                </Button>
            </div>
        </form>
    );
}
