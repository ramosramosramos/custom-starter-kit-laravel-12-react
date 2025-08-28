import { Filter } from '..';
import { Meta } from '../paginator-type';

export type User = {
    id: number;
    name: string;
    email: string;
    role: string;
    created_at: string;
    updated_at: string;
};
export type UserProps = {
    users: {
        data: User[];
        meta: Meta;
    };
    filter: Filter;
};
