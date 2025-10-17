import { Filter } from "@/types";
import SelectCompound from "../compounds/select-compound";
import { useForm } from "@inertiajs/react";
type SelectStaticFilterProps = {
    searchKey: keyof Filter;
    url: string;
    values: string[];
    placeholder: string;
    filter: Filter
}
export function SelectStaticFilter({ searchKey, url, values, placeholder, filter }: SelectStaticFilterProps) {

    const { data, get } = useForm({
        ...filter
    })

    const submit = (value: string) => {
        data[searchKey] = value
        get(url);
    }
    return (
        <SelectCompound defaultValue={filter[searchKey]} onValueChange={submit}>
            <SelectCompound.Trigger className="w-[180px]">
                <SelectCompound.Value placeholder={placeholder} />
            </SelectCompound.Trigger>
            <SelectCompound.Content>
                <SelectCompound.Item  value={' '}>Select none</SelectCompound.Item>
                {values.map((value, index) => (
                    <SelectCompound.Item key={`${value}_${index}`} value={value}>{value}</SelectCompound.Item>
                ))}
            </SelectCompound.Content>
        </SelectCompound>
    )
}

//usage
//   <SelectStaticFilter url={EmployeeController.index().url} searchKey="status" filter={filter} placeholder='Status' values={statuses} />
