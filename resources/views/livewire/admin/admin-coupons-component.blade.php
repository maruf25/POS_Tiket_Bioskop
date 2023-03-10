<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Coupons</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="/admin/coupons/add" class="btn btn-primary mb-3">Create new coupon</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Coupon Code</th>
                <th>Coupon Value</th>
                <th>Start Date</th>
                <th>Expire Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->disc_name }}</td>
                    <td>{{ $coupon->discount * 100 }} %</td>
                    <td>{{ $coupon->start_time }}</td>
                    <td>{{ $coupon->expire_time }}</td>
                    <td>
                        <a href="coupons/edit/{{ $coupon->idvoucher }}" class="btn btn-warning">Edit</a>
                        <button wire:click='deleteCoupon({{ $coupon->idvoucher }})'
                            class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
