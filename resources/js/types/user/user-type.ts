import { Filter } from '..';
import { Meta } from '../paginator-type';

export type User = {
    id: number;
    name: string;
    email: string;
    role: string;
    created_at: string;
    updated_at: string;
    can_be: CanBe;
};
export type UserProps = {
    users: {
        data: User[];
        meta: Meta;
    };
    filter: Filter;
};

export type CanBe = {
    updated: boolean;
    deleted: boolean;
};
