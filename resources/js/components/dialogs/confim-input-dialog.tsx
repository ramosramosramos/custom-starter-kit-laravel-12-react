import { notifyToast } from '@/lib/hot-notification/notify-toast';
import { ComponentProps, useState } from 'react';
import { DialogCompound } from '../compounds/dialog-compound';
import InputGroup from '../inputs/input-group';
import { Button } from '../ui/button';

export default function ConfirmInputDialog({
    title,
    description,
    onConfirm,
    reference,
    children,
    ...props
}: ComponentProps<typeof DialogCompound> & {
    title?: string;
    description?: string;
    reference: string;
    onConfirm: (isSame: boolean) => void;
}) {
    const [open, setOpen] = useState<boolean>(false);

    const [inputData, setInputData] = useState<string>('');
    const [error, setError] = useState<string | undefined>(undefined);
    const confirmSubmit = () => {
        if (inputData === reference) {
            onConfirm(true);
        } else {
            setError('Confirmation was incorrect');
        }
    };
    function copyToClipboard(text: string) {
        navigator.clipboard
            .writeText(text)
            .then(() => {
                notifyToast('Text copied to clipboard!');
            })
            .catch(() => {
                notifyToast.error('Failed to copy text: ' + text);
            });
    }
    return (
        <DialogCompound open={open} onOpenChange={() => setOpen(!open)} {...props}>
            <DialogCompound.Trigger asChild>{children}</DialogCompound.Trigger>
            <DialogCompound.Content className="sm:max-w-md">
                <DialogCompound.Header>
                    <DialogCompound.Title className="capitalize"> {title}</DialogCompound.Title>
                    <DialogCompound.Description>
                        {description ? (
                            description
                        ) : (
                            <span>
                                Please click{' '}
                                <span className="cursor-pointer text-red-600 hover:bg-red-200" onClick={() => copyToClipboard(reference)}>
                                    "{reference}"
                                </span>{' '}
                                and paste this input below to confirm deletion
                            </span>
                        )}
                    </DialogCompound.Description>
                </DialogCompound.Header>
                <div>
                    <InputGroup
                        id="reference"
                        label="Confirm Deletion"
                        inputProps={{
                            type: 'text',
                            value: inputData,
                            onChange: (e) => {
                                setInputData(e.target.value);
                                setError(undefined);
                            },
                        }}
                        error={error}
                    />
                </div>
                <div className="mt-5 flex justify-end gap-1.5">
                    <Button onClick={() => setOpen(false)} variant={'outline'}>
                        Cancel
                    </Button>
                    <Button variant={'destructive'} onClick={confirmSubmit}>
                        Confirm
                    </Button>
                </div>
            </DialogCompound.Content>
        </DialogCompound>
    );
}

//usage
// <ConfirmInputDialog
//   title="Deleting user"
//   reference={user.name.trim()}
//   onConfirm={() => {
//        router.delete(UserController.destroy(user.id), {
//preserveScroll: true,
// onSuccess: () => {
//     notifyToast.success('Successfully deleted');
//     playAudio('success');
// },
// onError: () => {
//     notifyToast.error('Failed to delete');
// },
//           })
//   }}
//           >
//   <DeleteButton />
//           </ConfirmInputDialog>
