import {
    Dialog,
    DialogClose,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/components/ui/dialog';

import { ComponentProps } from 'react';

export function DialogCompound({ children, ...props }: ComponentProps<typeof Dialog>) {
    return <Dialog {...props}>{children}</Dialog>;
}

DialogCompound.Close = DialogClose;
DialogCompound.Trigger = DialogTrigger;
DialogCompound.Content = DialogContent;
DialogCompound.Header = DialogHeader;
DialogCompound.Title = DialogTitle;
DialogCompound.Description = DialogDescription;
DialogCompound.Footer = DialogFooter;
//   <DialogCompound>
//       <DialogCompound.Trigger asChild>
//         <Button variant="outline">Share</Button>
//       </DialogCompound.Trigger>
//       <DialogCompound.Content className="sm:max-w-md">
//         <DialogCompound.Header>
//           <DialogCompound.Title>Share link</DialogCompound.Title>
//           <DialogCompound.Description>
//             Anyone who has this link will be able to view this.
//           </DialogCompound.Description>
//         </DialogCompound.Header>
//         <div className="flex items-center gap-2">
//           <div className="grid flex-1 gap-2">
//             <Label htmlFor="link" className="sr-only">
//               Link
//             </Label>
//             <Input
//               id="link"
//               defaultValue="https://ui.shadcn.com/docs/installation"
//               readOnly
//             />
//           </div>
//         </div>
//         <DialogCompound.Footer className="sm:justify-start">
//           <DialogCompound.Close asChild>
//             <Button type="button" variant="secondary">
//               Close
//             </Button>
//           </DialogCompound.Close>
//         </DialogCompound.Footer>
//       </DialogCompound.Content>
//     </DialogCompound>
