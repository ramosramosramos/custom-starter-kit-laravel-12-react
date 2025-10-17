import { Filter } from "@/types";
import SelectCompound from "../compounds/select-compound";
import { useForm } from "@inertiajs/react";
type SelectStaticFilterProps = {
    searchKey: keyof Filter;
    url: string;
    values: {id: string, name: string}[];
    placeholder: string;
    filter: Filter
}
export function SelectDynamicFilter({ searchKey, url, values, placeholder, filter }: SelectStaticFilterProps) {

    const { data, get } = useForm({
        ...filter
    })

    const submit = (value: string) => {
        data[searchKey] = value
        get(url);
    }
    return (
        <SelectCompound defaultValue={filter[searchKey]} onValueChange={submit}>
            <SelectCompound.Trigger className="min-w-[180px] w-[max-content]">
                <SelectCompound.Value placeholder={placeholder} />
            </SelectCompound.Trigger>
            <SelectCompound.Content>
                <SelectCompound.Item  value={' '}>Select none</SelectCompound.Item>
                {values.map((value, index) => (
                    <SelectCompound.Item key={`${value.id}_${index}`} value={value.name}>{value.name}</SelectCompound.Item>
                ))}
            </SelectCompound.Content>
        </SelectCompound>
    )
}

//<SelectDynamicFilter url={EmployeeController.index().url} searchKey="position_name" filter={filter} placeholder='Position' values={positions} />
