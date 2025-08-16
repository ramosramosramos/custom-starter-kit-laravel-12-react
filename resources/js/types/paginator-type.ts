export interface Meta {

    current_page: number;
    from: number;
    last_page: number;
    path: string;
    per_page: number;
    to: number;
    total: number;
    links: Link[];
    first_page_url: string;
    last_page_url: string;
    next_page_url: string;
    previous_page_url: string;
    
}

export interface Link {

    active: boolean;
    label: string;
    url: string
}
