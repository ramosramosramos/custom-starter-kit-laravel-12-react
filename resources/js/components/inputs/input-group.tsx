import { ComponentProps } from 'react';
import InputError from '../input-error';
import { Input } from '../ui/input';
import { Label } from '../ui/label';
import RequiredIndicator from './indicators/required-indicator';

type InputGroupProps = ComponentProps<'div'> & {
    id: string;
    label: string;
    error?: string;
    required?: boolean;
    inputProps?: ComponentProps<typeof Input>;
    labelProps?: ComponentProps<typeof Label>;
};

export default function InputGroup({ id, label, required, error, inputProps, labelProps, ...props }: InputGroupProps) {
    return (
        <div {...props}>
            <Label htmlFor={id} {...labelProps}>
                {label} {required && <RequiredIndicator />}
            </Label>
            <Input id={id} name={id} {...inputProps} />
            <InputError message={error} />
        </div>
    );
}
