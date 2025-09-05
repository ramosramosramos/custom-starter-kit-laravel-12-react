'use client';

import { CalendarIcon } from 'lucide-react';
import { useEffect, useState } from 'react';

import { Button } from '@/components/ui/button';
import { Calendar } from '@/components/ui/calendar';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Popover, PopoverContent, PopoverTrigger } from '@/components/ui/popover';

type DatePickerInputProps = {
    id?: string;
    label?: string;
    defaultValue?: Date | string;
    value?: Date;
    onChange?: (date: Date | undefined) => void;
    format?: (date: Date | undefined) => string;
    placeholder?: string;
};

function defaultFormat(date: Date | undefined) {
    if (!date) return '';
    return date.toLocaleDateString('en-US', {
        day: '2-digit',
        month: 'long',
        year: 'numeric',
    });
}

function isValidDate(date: Date | undefined) {
    return !!date && !isNaN(date.getTime());
}

export function DatePickerInput({
    id = 'date-picker',
    label,
    defaultValue,
    value: controlledValue,
    onChange,
    format = defaultFormat,
    placeholder = 'Select date',
}: DatePickerInputProps) {
    const [open, setOpen] = useState(false);

    // controlled vs uncontrolled
    const [internalDate, setInternalDate] = useState<Date | undefined>(typeof defaultValue === 'string' ? new Date(defaultValue) : defaultValue);

    const date = controlledValue ?? internalDate;
    const [month, setMonth] = useState<Date | undefined>(date);
    const [display, setDisplay] = useState(format(date));

    useEffect(() => {
        setDisplay(format(date));
    }, [date, format]);

    const handleSelect = (newDate: Date | undefined) => {
        if (controlledValue === undefined) {
            setInternalDate(newDate);
        }
        onChange?.(newDate);
        setOpen(false);
    };

    return (
        <div className="flex flex-col gap-3">
            {label && (
                <Label htmlFor={id} className="px-1">
                    {label}
                </Label>
            )}
            <div className="relative flex gap-2">
                <Input
                    readOnly
                    id={id}
                    value={display}
                    placeholder={placeholder}
                    className="bg-background pr-10"
                    onChange={(e) => {
                        const newDate = new Date(e.target.value);
                        setDisplay(e.target.value);
                        if (isValidDate(newDate)) {
                            if (controlledValue === undefined) {
                                setInternalDate(newDate);
                            }
                            setMonth(newDate);
                            onChange?.(newDate);
                        }
                    }}
                    onKeyDown={(e) => {
                        if (e.key === 'ArrowDown') {
                            e.preventDefault();
                            setOpen(true);
                        }
                    }}
                />
                <Popover open={open} onOpenChange={setOpen}>
                    <PopoverTrigger asChild>
                        <Button variant="ghost" className="absolute top-1/2 right-2 size-6 -translate-y-1/2">
                            <CalendarIcon className="size-3.5" />
                            <span className="sr-only">Select date</span>
                        </Button>
                    </PopoverTrigger>
                    <PopoverContent className="w-auto overflow-hidden p-0" align="end" alignOffset={-8} sideOffset={10}>
                        <Calendar
                            className="w-60"
                            mode="single"
                            selected={date}
                            captionLayout="dropdown"
                            month={month}
                            onMonthChange={setMonth}
                            onSelect={handleSelect}
                        />
                    </PopoverContent>
                </Popover>
            </div>
        </div>
    );
}
//usage

//           <DatePickerInput defaultValue={now} onChange={(date) => setData('paid_at', date )} />
