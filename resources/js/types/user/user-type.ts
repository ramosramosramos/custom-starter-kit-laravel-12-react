import { Filter } from '..';
import { Meta } from '../paginator-type';
import { CanBe, Permission } from '../permission/permission-type';

export type User = {
    id: number;
    name: string;
    email: string;
    role: string;
    created_at: string;
    updated_at: string;
    can_be: CanBe;
    permissions: Permission[];
};
export type UserProps = {
    users: {
        data: User[];
        meta: Meta;
    };
    filter: Filter;
};
