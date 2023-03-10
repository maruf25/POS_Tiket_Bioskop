<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Coupon</h1>
    </div>

    <div class="col-lg-8">
        <form wire:submit.prevent='createCoupon'>
            <div class="form-group">
                <label for="couponcode">Coupon Code</label>
                <input type="text" class="form-control" placeholder="Enter code" wire:model.defer='code'>
            </div>
            <div class="form-group">
                <label for="couponvalue">Coupon Value</label>
                <input type="number" class="form-control" placeholder="value %" wire:model.defer='value'>
            </div>
            <div class="row form-group">
                <label for="start_date">Start Date</label>
                <div class="col-sm-4">
                    <input type="datetime-local" class="form-control" wire:model.defer='start_date'>
                </div>
            </div>
            <div class="row form-group">
                <label for="exp_date">Expire Date</label>
                <div class="col-sm-4">
                    <input type="datetime-local" class="form-control" wire:model.defer='exp_date'>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
