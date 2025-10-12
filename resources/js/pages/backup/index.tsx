import BackupController from '@/actions/App/Http/Controllers/BackupController';
import DeleteButton from '@/components/buttons/delete-button';
import TableCompound from '@/components/compounds/table-compound';
import ConfirmInputDialog from '@/components/dialogs/confirm-input-dialog';

import NoAvailable from '@/components/fallbacks/no-available';

import { Button } from '@/components/ui/button';
import { useCan } from '@/hooks/use-can';

import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head, router } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Backups',
        href: '/backups',
    },
];

type Backup = {
    path: string;
    size: string;
    generated_at: string;
};

export default function Index({ backups }: { backups: Backup[] }) {
    const can = useCan();
    const handleGenerateBackup = () => {
        router.post(BackupController.generate());
    };
    return (
        can?.backup_view && (
            <AppLayout breadcrumbs={breadcrumbs}>
                <Head title="Backups" />
                <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                    <div className="flex justify-end p-1">
                        {can?.backup_generate && <Button onClick={handleGenerateBackup}>Generate backup</Button>}
                    </div>

                    <div className="relative min-h-[100vh] flex-1 overflow-hidden rounded-xl md:min-h-min md:p-5">
                        {backups.length > 0 && (
                            <div className="md:px-20">
                                <BackupTable backups={backups} />
                            </div>
                        )}
                        {backups.length === 0 && <NoAvailable title="No available backups." />}
                    </div>
                </div>
            </AppLayout>
        )
    );
}

function BackupTable({ backups }: { backups: Backup[] }) {
    const can = useCan();
    return (
        <TableCompound>
            <TableCompound.Header>
                <TableCompound.Row>
                    <TableCompound.Head className="w-[100px]">Path</TableCompound.Head>
                    <TableCompound.Head>Size</TableCompound.Head>
                    <TableCompound.Head>Generated at</TableCompound.Head>
                    <TableCompound.Head>Actions</TableCompound.Head>
                </TableCompound.Row>
            </TableCompound.Header>
            <TableCompound.Body>
                {backups.length > 0 &&
                    backups.map((backup, index) => (
                        <TableCompound.Row key={index}>
                            <TableCompound.Cell className="text-primary">{backup.path}</TableCompound.Cell>
                            <TableCompound.Cell>{backup.size}</TableCompound.Cell>
                            <TableCompound.Cell>{backup.generated_at}</TableCompound.Cell>
                            <TableCompound.Cell className="flex items-center gap-1.5">
                                {can?.backup_delete && (
                                    <ConfirmInputDialog
                                        title="Deleting user"
                                        reference={backup.path.trim()}
                                        onConfirm={() => {
                                            router.delete(
                                                BackupController.destroy({
                                                    query: {
                                                        path: backup.path,
                                                    },
                                                }),
                                            );
                                        }}
                                    >
                                        <DeleteButton>Force Delete</DeleteButton>
                                    </ConfirmInputDialog>
                                )}
                                {can?.backup_download && (
                                    <a
                                        target="_blank"
                                        href={
                                            BackupController.download({
                                                query: {
                                                    path: backup.path.replace('Laravel/', ''),
                                                },
                                            }).url
                                        }
                                        className={`inline-flex h-9 cursor-pointer items-center justify-center gap-2 rounded-md bg-primary px-4 py-2 text-sm font-medium whitespace-nowrap text-primary-foreground shadow-xs transition-[color,box-shadow] outline-none hover:bg-primary/90 focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 has-[>svg]:px-3 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4`}
                                    >
                                        Download
                                    </a>
                                )}
                            </TableCompound.Cell>
                        </TableCompound.Row>
                    ))}
            </TableCompound.Body>
        </TableCompound>
    );
}
