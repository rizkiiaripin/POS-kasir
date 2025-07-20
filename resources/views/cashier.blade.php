@extends('layouts.app')
@section('content')
    <div class="row gap-4">
        <div class="col-7 shadow-sm p-3 ">
            <h4 class="mb-4">Kasir</h4>
            <form>
                <div class="input-group">
                    <input class="form-control" placeholder="search products by name or barcode"
                        aria-label="search products by name or barcode" type="text">

                    <button class="btn btn-secondary d-flex align-items-center gap-2" type="button">
                        Scan Barcode
                        <i class="ti ti-camera fs-5"></i>
                        {{-- <i class="ti ti-search"></i> --}}
                    </button>
                </div>
            </form>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <tr>
                        <td>1</td>
                        <td>Product A</td>
                        <td>$10.00</td>
                        <td>
                            <input type="number" class="form-control " value="1"
                                style="max-width: 50px; padding: 5px; border-color:rgba(190, 181, 181, 0.802); ">
                        </td>
                        <td>$20.00</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>

            </table>
        </div>
        <div class="col shadow-sm p-3">
            <h4>Pembayaran</h4>
            <table class="table ">
                <tbody>
                    <tr class="align-middle">
                        <td>Bayar pelanggan : </td>
                        <td>
                            <input type="number" class="form-control" placeholder="bayar pelangan..">
                        </td>
                    </tr>
                    <tr>
                        <td>Total Price : </td>
                        <td>Rp</td>
                    </tr>
                    <tr>
                        <td>Kembalian : </td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary w-100">Checkout</button>
        </div>
    </div>
@endsection
