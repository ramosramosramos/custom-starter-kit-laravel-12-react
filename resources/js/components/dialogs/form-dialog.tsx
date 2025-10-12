import { cn } from '@/lib/utils';
import { ComponentProps } from 'react';
import { DialogCompound } from '../compounds/dialog-compound';
import InputError from '../input-error';
import OptionalIndicator from '../inputs/indicators/optional-indicator';
import RequiredIndicator from '../inputs/indicators/required-indicator';
import { Button } from '../ui/button';
import { Input } from '../ui/input';
import { Label } from '../ui/label';
import { FormAbility } from '@/types';
import AddButton from '../buttons/add-button';
import EditButton from '../buttons/edit-button';

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

    open?: boolean | undefined;
    defaultOpen?: boolean | undefined;
    onOpenChange?: (open: boolean) => void;
    formAbility: FormAbility

};

export default function FormDialog(props: ComponentProps<typeof DialogCompound> & FormDialogProps) {

    return (
        <DialogCompound open={props?.open} onOpenChange={props?.onOpenChange} >
            <DialogCompound.Trigger asChild>

                    {
                        props?.formAbility == "create" ?
                            <AddButton className={props.triggerClassName} variant={props.triggerVariant}>
                                {props.triggerName}
                            </AddButton> :
                            <EditButton className={props.triggerClassName} variant={props.triggerVariant}>
                                {props.triggerName}
                            </EditButton>
                    }

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
// type RoleFormDialogProps = {
//     formAbility: FormAbility;
//     role?: Role;
// }
// type RoleFormType = {
//     name: string
// }
// function RoleFormDialog({ formAbility, role }: RoleFormDialogProps) {
//     const [open, setOpen] = useState<boolean>(false);
//     const { data, setData, errors, post, put } = useForm<RoleFormType>({
//         name: role ? role.name : '',
//     });

//     const submit: FormEventHandler = (e) => {
//         e.preventDefault();
//         // setOpen(true);
//         if (formAbility === "create") {
//             post(RoleController.store().url, {
//                 onSuccess: () => {
//                     setOpen(false);

//                 }
//             })
//         }
//         if (formAbility === "edit") {
//             put(RoleController.update({ role: role?.id as number }).url, {
//                 onSuccess: () => {
//                     setOpen(false);

//                 }
//             })
//         }
//     }
//     return (
//         <FormDialog
//             open={open}
//        onOpenChange={setOpen}

//             onSubmit={submit}
//             title={formAbility === "edit" ? 'Edit' : 'Create role'}
//             triggerName={formAbility === "edit" ? 'Edit' : 'Create'}
//         >
//             <div className='mb-3 space-x-1.5'>
//                 <FormDialog.Label label='Name' required />
//                 <FormDialog.Input value={data.name} onChange={(e) => setData('name', e.target.value)} />
//                 <FormDialog.InputError message={errors.name} />
//             </div>
//             <FormDialog.Button>
//                 {formAbility === "edit" ? 'Save' : 'Submit'}
//             </FormDialog.Button>
//         </FormDialog>
//     );
// }
