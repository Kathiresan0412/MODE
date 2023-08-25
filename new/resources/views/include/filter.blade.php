<div class="row">
    <div class="col-12 col-md-4">
        <div class="mb-3">
            <label for="sort_by" class="form-label">Sort By</label>
            <div class="row">
                <div class="col-6">
                    <select class="form-control" name="sort_by">
                        @foreach ($sortByArray as $key => $item)
                            <option value="{{ $key }}" {{ $sortBy == $key ? "selected" : "" }}>{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <select class="form-control" name="sort_direction">
                        <option value="asc" {{ $sortDirection == 'asc' ? "selected" : "" }}>ASC</option>
                        <option value="desc" {{ $sortDirection == 'desc' ? "selected" : "" }}>DESC</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="mb-3">
        <label for="limit" class="form-label">Limit</label>
        <select class="form-control" name="page_per">
            <option value="10" {{ $pagePer == 10 ? "selected" : "" }}>10</option>
            <option value="25" {{ $pagePer == 25 ? "selected" : "" }}>25</option>
            <option value="50" {{ $pagePer == 50 ? "selected" : "" }}>50</option>
            <option value="100" {{ $pagePer == 100 ? "selected" : "" }}>100</option>
        </select>
        </div>
    </div>
</div>
