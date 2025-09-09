import UserController from '@/actions/App/Http/Controllers/UserController';
import SelectCompound from '@/components/compounds/select-compound';
import InputGroup from '@/components/inputs/input-group';
import { Button } from '@/components/ui/button';
import { FormAbility, OmitKeys } from '@/types';
import { User } from '@/types/user/user-type';
import { useForm, usePage } from '@inertiajs/react';
import { FormEventHandler } from 'react';

type UserFormPageProps = {
    user?: User;
    roles?: Role[];
};
type UserFormProps = {
    formAbility: FormAbility;
};
type Role = {
    id: number;
    name: string;
};

export default function UserForm({ formAbility }: UserFormProps) {
    const { user, roles } = usePage<UserFormPageProps>().props;

    const { data, setData, errors, processing, post, put } = useForm<OmitKeys<User, 'id' | 'created_at' | 'updated_at' | 'can_be' | 'permissions'>>({
        name: user?.name ?? '',
        email: user?.email ?? '',
        role: user?.role ?? '',
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        if (formAbility === 'create') {
            post(UserController.store().url, {
                preserveScroll: true,
            });
        }
        if (formAbility === 'edit') {
            put(UserController.update({ user: user?.id as number }).url, {
                preserveScroll: true,
            });
        }
    };
    return (
        <form onSubmit={submit}>
            <InputGroup
                className="mb-5"
                id="name"
                label="Name"
                error={errors.name}
                inputProps={{
                    type: 'text',
                    value: data.name,
                    onChange: (e) => setData('name', e.target.value),
                }}
            />
            <InputGroup
                className="mb-5"
                id="email"
                label="Email"
                error={errors.email}
                inputProps={{
                    type: 'text',
                    value: data.email,
                    onChange: (e) => setData('email', e.target.value),
                }}
            />

            <div className="mb-5">
                <SelectCompound defaultValue={data.role} onValueChange={(value) => setData('role', value)}>
                    <SelectCompound.Trigger className="w-[180px]">
                        <SelectCompound.Value placeholder="Select Role" />
                    </SelectCompound.Trigger>
                    <SelectCompound.Content>
                        {roles?.map((role) => (
                            <SelectCompound.Item key={role.id} value={role.name}>
                                {role.name}
                            </SelectCompound.Item>
                        ))}
                    </SelectCompound.Content>
                </SelectCompound>
            </div>

            <Button disabled={processing}>{formAbility === 'create' ? 'Submit' : 'Save'}</Button>
        </form>
    );
}
