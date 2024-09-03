@if (session()->has('error'))
    <div class="card bg-danger-lt mb-4">
        <div class="card-body">
            <h3 class="card-title d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-xbox-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 21a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9a9 9 0 0 0 -9 9a9 9 0 0 0 9 9z" />
                    <path d="M9 8l6 8" />
                    <path d="M15 8l-6 8" />
                </svg>
                <span class="ms-2" style="font-size: 14px;">{{ session('error') }}</span>
            </h3>
        </div>
    </div>
@endif
@if (session()->has('success'))
    <div class="card bg-success-lt mb-4">
        <div class="card-body">
            <h3 class="card-title d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-circle-dashed-check">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95" />
                    <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44" />
                    <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" />
                    <path d="M8.56 20.31a9 9 0 0 0 3.44 .69" />
                    <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" />
                    <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />
                    <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" />
                    <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" />
                    <path d="M9 12l2 2l4 -4" />
                </svg>
                <span class="ms-2" style="font-size: 14px;">{{ session('success') }}</span>
            </h3>
        </div>
    </div>
@endif