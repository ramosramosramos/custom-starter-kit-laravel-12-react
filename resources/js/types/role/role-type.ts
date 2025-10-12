import { Filter } from '..';
import { Meta } from '../paginator-type';
import { CanBe, Permission } from '../permission/permission-type';

export type Role = {
    id: number;
    name: string;
    created_at?: string;
    updated_at?: string;
    permissions: Permission[];
    can_be: CanBe;
};
export type RoleProps = {
    roles: {
        data: Role[];
        meta: Meta;
    };
    filter: Filter;
};
