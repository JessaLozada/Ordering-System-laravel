@extends('master')
@section("content")
<div class="custom-ordernow" style="margin-bottom: 570px">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
            <tr>
                <td>Amount</td>
                <td><i style='font-size: 24px' class='fas'>&#xf158;</i> {{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td><i style='font-size: 24px' class='fas'>&#xf158;</i> 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td><i style='font-size: 24px' class='fas'>&#xf158;</i> 50</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td><i style='font-size: 24px' class='fas'>&#xf158;</i> {{$total+50}}</td>
            </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
            @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
                </div>
                <div class="form-group-method">
                    <label for="pay">Payment Method</label> <br> <br>
                    <input type="radio" value="Online Payment" name="payment"><span> Online Payment</span> <br> <br>
                    <input type="radio" value="EMI Payment" name="payment"><span> EMI Payment</span> <br> <br>
                    <input type="radio" value="Cash on Delivery" name="payment"><span> Cash on Delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Place Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
