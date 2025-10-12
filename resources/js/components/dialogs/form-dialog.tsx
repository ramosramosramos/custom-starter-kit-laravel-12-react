import { cn } from '@/lib/utils';
import { ComponentProps } from 'react';
import { DialogCompound } from '../compounds/dialog-compound';
import InputError from '../input-error';
import OptionalIndicator from '../inputs/indicators/optional-indicator';
import RequiredIndicator from '../inputs/indicators/required-indicator';
import { Button } from '../ui/button';
import { Input } from '../ui/input';
import { Label } from '../ui/label';

type FormDialogProps = {
    title: string;
    description?: string;

    onSubmit?: ComponentProps<'form'>['onSubmit'];
    formClassName?: ComponentProps<'form'>['className'];
    formProps?: ComponentProps<'form'>;

    triggerName: string;
    triggerClassName?: ComponentProps<typeof Button>['className'];
    triggerVariant?: ComponentProps<typeof Button>['variant'];
    triggerProps?: ComponentProps<typeof Button>;

    contentClassName?: ComponentProps<typeof Button>['className'];
    contentProps?: ComponentProps<typeof DialogCompound.Content>;
};

export default function FormDialog(props: ComponentProps<typeof DialogCompound> & FormDialogProps) {
    return (
        <DialogCompound>
            <DialogCompound.Trigger asChild>
                <Button className={props.triggerClassName} variant={props.triggerVariant}>
                    {props.triggerName}
                </Button>
            </DialogCompound.Trigger>
            <DialogCompound.Content className={props.contentClassName} {...props.contentProps}>
                <DialogCompound.Header>
                    <DialogCompound.Title>{props.title}</DialogCompound.Title>
                    <DialogCompound.Description>{props.description}</DialogCompound.Description>
                </DialogCompound.Header>

                <form onSubmit={props.onSubmit} className={cn('p-1', props.formClassName)} {...props.formProps}>
                    {props.children}
                </form>
            </DialogCompound.Content>
        </DialogCompound>
    );
}

FormDialog.Label = ({
    label,
    required,
    optional,
    ...props
}: { label: string; required?: boolean; optional?: boolean } & ComponentProps<typeof Label>) => {
    if (required && optional) {
        throw new Error('(required) and (optional) cannot be both exist');
    }
    return (
        <Label {...props}>
            {label} {required && <RequiredIndicator />}
            {optional && !required && <OptionalIndicator />}
        </Label>
    );
};
FormDialog.Input = Input;
FormDialog.InputError = InputError;
FormDialog.Button = Button;

//usage
// function RoleFormDialog() {
//     return (
//         <FormDialog
//             title='Edit'
//             description='Edit'
//             triggerName='Edit'
//         >
//             <div className='mb-3 space-x-1.5'>
//                 <FormDialog.Label label='Name' required />
//                 <FormDialog.Input />
//                 <FormDialog.InputError />
//             </div>
//             <FormDialog.Button>
//                 Save
//             </FormDialog.Button>
//         </FormDialog>
//     );
// }
