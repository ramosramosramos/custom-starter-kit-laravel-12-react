import RoleController from '@/actions/App/Http/Controllers/RoleController';
import { TypographyH2, TypographyH4 } from '@/components/typography/shadcn-typography';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Permission } from '@/types/permission/permission-type';
import {Role } from '@/types/role/role-type';

import { Head, useForm } from '@inertiajs/react';
import { useState } from 'react';

const breadcrumbs: BreadcrumbItem[] = [{ title: 'Edit Role Permissions', href: '' }];

type PermissionFormType = {
    permissions: string[]; // store names only
};

export default function Edit({ role, permissions }: { role: {data:Role}; permissions: Permission[] }) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Edit Role" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl border border-sidebar-border/70 p-2 md:min-h-min md:p-5 dark:border-sidebar-border">
                    <TypographyH2 className="mb-5">{role.data.name}</TypographyH2>
                    <TypographyH4 className="mb-5">Role Permissions</TypographyH4>
                    <PermissionForm role={role.data} permissions={permissions} />
                </div>
            </div>
        </AppLayout>
    );
}

export function PermissionForm({ role, permissions }: { role: Role; permissions: Permission[] }) {
    const { data, setData, put, processing } = useForm<PermissionFormType>({
        permissions: role.permissions.map((p) => p.name),
    });

    const [search, setSearch] = useState('');

    const togglePermission = (name: string, checked: boolean) => {
        setData('permissions', checked ? [...data.permissions, name] : data.permissions.filter((pid) => pid !== name));
    };

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        put(RoleController.updatePermission({ role: role.id }).url);
    };

    // filter permissions based on search
    const filteredPermissions = permissions.filter((p) => p.name.toLowerCase().includes(search.toLowerCase()));

    return (
        <form onSubmit={handleSubmit} className="space-y-6">
            {/* Search Filter */}
            <div>
                <Input
                    type="text"
                    placeholder="Search permissions..."
                    value={search}
                    onChange={(e) => setSearch(e.target.value)}
                    className="w-full md:w-1/2"
                />
            </div>

            {/* Permissions List */}
            <div className="grid auto-rows-min gap-4 md:grid-cols-3">
                {filteredPermissions.length > 0 ? (
                    filteredPermissions.map((permission) => (
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
                    ))
                ) : (
                    <p className="col-span-full text-sm text-muted-foreground">No permissions found</p>
                )}
            </div>

            {/* Submit Button */}
            <div className="flex justify-end">
                <Button type="submit" disabled={processing}>
                    Save
                </Button>
            </div>
        </form>
    );
}
