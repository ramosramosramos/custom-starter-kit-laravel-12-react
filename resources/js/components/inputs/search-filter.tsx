import { playAudio } from '@/lib/audios/play-audio-message';
import { notifyToast } from '@/lib/hot-notification/notify-toast';
import { Filter } from '@/types';
import { useForm } from '@inertiajs/react';
import { SearchIcon } from 'lucide-react';
import { FormEventHandler } from 'react';
import { Button } from '../ui/button';
import { Input } from '../ui/input';

type SearchFilterProps = {
    url: string;
    filter: Filter;
    formProps?: React.FormHTMLAttributes<HTMLFormElement>;
    inputProps?: React.InputHTMLAttributes<HTMLInputElement>;
    buttonProps?: React.ButtonHTMLAttributes<HTMLButtonElement>;
    searchLimit?: boolean;
};

export default function SearchFilter({ url, filter, formProps, inputProps, buttonProps, searchLimit = true }: SearchFilterProps) {
    const { data, setData, get, processing } = useForm<Filter>({
        search: filter?.search ?? '',
        ...filter,
    });
    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        if (searchLimit && data.search && data.search.length === 1) {
            playAudio('message');
            notifyToast.error('Please enter more than 1 character', {
                duration: 2000,
            });
            return;
        }
        if (processing) return;
        get(url, { preserveScroll: true });
    };
    return (
        <form {...formProps} onSubmit={submit} className="flex gap-2">
            <Input value={data.search ?? ''} onChange={(e) => setData('search', e.target.value)} autoFocus placeholder="Search..." {...inputProps} />
            <Button disabled={processing} {...buttonProps}>
                <SearchIcon />
            </Button>
        </form>
    );
}
