{{ $item->status == 1
    ? 'badge-light-primary'
    : ($item->status == 2
        ? 'badge-light-warning'
        : ($item->status == 3
            ? 'badge-light-danger'
            : ($item->status == 4
                ? 'badge-secondary'
                : ($item->status == 5
                    ? 'badge-light-info'
                    : 'badge-light-success')))) }}
