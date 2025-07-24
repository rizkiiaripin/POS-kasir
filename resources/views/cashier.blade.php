@extends('layouts.app')
@section('content')
    <div class="row gap-4">
        <div class="col-7 shadow-sm p-3 ">
            <h4 class="mb-4">Kasir</h4>
            <form>
                <div class="input-group">
                    <input class="form-control" placeholder="search products by barcode or scan"
                        aria-label="search products by barcode or scan" type="number" name="searchBarcode">

                    <button class="btn btn-secondary d-flex align-items-center gap-2" type="button" id="buttonScan">
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
                            <input type="number" class="form-control " min="0" step="1"  value="1"
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
                            <input type="number" class="form-control" min="0" placeholder="Input uang pelangan..">
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
    {{-- <div id="reader" style="width: 300px;"></div> --}}
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        // // Initialize the QR code scanner
        // const html5QrCode = new Html5Qrcode("reader");
        // const buttonScan = document.getElementById('buttonScan');
        // // Start scanning
        // html5QrCode.start(
        //     { facingMode: "environment" }, // Use the rear camera
        //     {
        //         fps: 10, // Frames per second
        //         qrbox: { width: 250, height: 250 } // Size of the scanning box
        //     },
        //     (decodedText, decodedResult) => {
        //         // Handle the scanned result here
        //         console.log(`Decoded text: ${decodedText}`);
        //         // You can also update the input field with the scanned barcode
        //         document.querySelector('input[name="searchBarcode"]').value = decodedText;
        //     },
        //     (errorMessage) => {
        //         // Handle errors here
        //         console.error(`Error scanning: ${errorMessage}`);
        //     }
        // ).catch(err => {
        //     console.error(`Error starting QR code scanner: ${err}`);
        // });
    </script>
@endsection
