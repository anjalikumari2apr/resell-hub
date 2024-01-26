Dear {{ auth()->user()->name}}
<p> Thank you so much for Order</p>
<h2> Here is your Room Details for order No {{ $orderNo ?? '' }} </h2>
<div class="product-description">
            <h2>{{ $product->Name}} </h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Price</th>
                            <td> {{ $product->Price }} </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th >Address</th>
                            <td> {{ $product->Address }} </td>
                          </tr>
                          <tr>
                            <th>  Contact Number </th>
                            <td> <u>{{ $product->Contact }}</u> </td>
                          <tr>
                            <td colspan="2">
                              <p>
                              {{ $product->description }}
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
          </div> <br/>
