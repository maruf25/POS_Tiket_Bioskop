<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Movie Seat Booking</title>
</head>

<body>

    <ul class="showcase">
        <li>
        <li class="seat">
            <label>EX</label>
        </li>
        <li class="seat ex">
            <label>Available</label>
        </li>
        </li>
        <li>
        <li class="seat">
            <input type="checkbox" checked />
            <label>EX</label>
        </li>
        <li class="seat ex">
            <label>Selected</label>
        </li>
        </li>
        <li>
        <li class="seat sold">
            <label>EX</label>
        </li>
        <li class="seat ex">
            <label>Sold</label>
        </li>
        </li>
    </ul>

    <div class="container">
        <div class="screen"></div>

        <ol>
            <li>
                <ol class="seats">
                    <li class="seat sold">
                        <input type="checkbox" id="A1" value="A1" disabled />
                        <label for="A1">A1</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A2" value="A2" />
                        <label for="A2">A2</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A3" value="A3" />
                        <label for="A3">A3</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A4" value="A4" />
                        <label for="A4">A4</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A5" value="A5" />
                        <label for="A5">A5</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A6" value="A6" />
                        <label for="A6">A6</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A7" value="A7" />
                        <label for="A7">A7</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A8" value="A8" />
                        <label for="A8">A8</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A9" value="A9" />
                        <label for="A9">A9</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="A10" value="A10" />
                        <label for="A10">A10</label>
                    </li>
                </ol>
            </li>
            <li>
                <ol class="seats">
                    <li class="seat">
                        <input type="checkbox" id="B1" value="B1" />
                        <label for="B1">B1</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B2" value="B2" />
                        <label for="B2">B2</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B3" value="B3" />
                        <label for="B3">B3</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B4" value="B4" />
                        <label for="B4">B4</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B5" value="B5" />
                        <label for="B5">B5</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B6" value="B6" />
                        <label for="B6">B6</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B7" value="B7" />
                        <label for="B7">B7</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B8" value="B8" />
                        <label for="B8">B8</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B9" value="B9" />
                        <label for="B9">B9</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="B10" value="B10" />
                        <label for="B10">B10</label>
                    </li>
                </ol>
            </li>
            <li>
                <ol class="seats">
                    <li class="seat">
                        <input type="checkbox" id="C1" value="C1" />
                        <label for="C1">C1</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C2" value="C2" />
                        <label for="C2">C2</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C3" value="C3" />
                        <label for="C3">C3</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C4" value="C4" />
                        <label for="C4">C4</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C5" value="C5" />
                        <label for="C5">C5</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C6" value="C6" />
                        <label for="C6">C6</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C7" value="C7" />
                        <label for="C7">C7</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C8" value="C8" />
                        <label for="C8">C8</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C9" value="C9" />
                        <label for="C9">C9</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="C10" value="C10" />
                        <label for="C10">C10</label>
                    </li>
                </ol>
            </li>
            <li>
                <ol class="seats">
                    <li class="seat">
                        <input type="checkbox" id="D1" value="D1" />
                        <label for="D1">D1</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D2" value="D2" />
                        <label for="D2">D2</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D3" value="D3" />
                        <label for="D3">D3</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D4" value="D4" />
                        <label for="D4">D4</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D5" value="D5" />
                        <label for="D5">D5</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D6" value="D6" />
                        <label for="D6">D6</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D7" value="D7" />
                        <label for="D7">D7</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D8" value="D8" />
                        <label for="D8">D8</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D9" value="D9" />
                        <label for="D9">D9</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="D10" value="D10" />
                        <label for="D10">D10</label>
                    </li>
                </ol>
            </li>
            <li>
                <ol class="seats">
                    <li class="seat">
                        <input type="checkbox" id="EE" value="E1" />
                        <label for="E1">E1</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E2" value="E2" />
                        <label for="E2">E2</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E3" value="E3" />
                        <label for="E3">E3</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E4" value="E4" />
                        <label for="E4">E4</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E5" value="E5" />
                        <label for="E5">E5</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E6" value="E6" />
                        <label for="E6">E6</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E7" value="E7" />
                        <label for="E7">E7</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E8" value="E8" />
                        <label for="E8">E8</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E9" value="E9" />
                        <label for="E9">E9</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" id="E10" value="E10" />
                        <label for="E10">E10</label>
                    </li>
                </ol>
            </li>
        </ol>
    </div>
    <p class="text">
        You have selected <span id="count">0</span> seat for a price of RP.<span id="total">0</span>
    </p>
    <form action="">
        <div class="voucher">
            {{-- <label for="code" class="form-label">Code Voucher</label> --}}
            <input type="text" class="form-control" id="code" placeholder="Code Voucher">
            <button type="submit" class="btn">Apply</button>
        </div>
    </form>

</body>

</html>
