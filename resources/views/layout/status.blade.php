{{ $item->status == 1
    ? 'Project baru'
    : ($item->status == 2
        ? 'On progres'
        : ($item->status == 3
            ? 'Bug report'
            : ($item->status == 4
                ? 'Trial error'
                : ($item->status == 5
                    ? 'Revisi'
                    : 'Realese')))) }}
