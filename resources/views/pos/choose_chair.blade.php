@extends('pos.layouts.layout')

@section('content')
    <section id="choose-chair">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="title">PILIH KURSI</div>
                <div class="subtitle">Pilih kursi yang akan kamu tempati selama pemutaran film</div>
            </div>
            <div class="row mb-5">
                <div class="col d-flex justify-content-end">
                    <div class="full d-flex ">
                        <div class="box-full me-2"></div>
                        <div class="text-full">Terisi</div>
                    </div>
                    <div class="empty d-flex mx-3">
                        <div class="box-empty me-2"></div>
                        <div class="text-empty">Kursi Kosong</div>
                    </div>
                    <div class="choosed d-flex ">
                        <div class="box-choosed me-2"></div>
                        <div class="text-choosed">Dipilih</div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mb-3">
                <div class="col-6">
                    <div class="row mb-3">
                        <a type="button" class="choose-box">A1</a>
                        <a type="button" class="choose-box">A2</a>
                        <a type="button" class="choose-box">A3</a>
                        <a type="button" class="choose-box">A4</a>
                        <a type="button" class="choose-box">A5</a>
                        <a type="button" class="choose-box">A6</a>
                        <a type="button" class="choose-box">A7</a>
                        <a type="button" class="choose-box">A8</a>
                        <a type="button" class="choose-box fully">A9</a>
                        <a type="button" class="choose-box fully">A10</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">B1</a>
                        <a type="button" class="choose-box">B2</a>
                        <a type="button" class="choose-box fully">B3</a>
                        <a type="button" class="choose-box fully">B4</a>
                        <a type="button" class="choose-box fully">B5</a>
                        <a type="button" class="choose-box">B6</a>
                        <a type="button" class="choose-box">B7</a>
                        <a type="button" class="choose-box fully">B8</a>
                        <a type="button" class="choose-box fully">B9</a>
                        <a type="button" class="choose-box fully">B10</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">C1</a>
                        <a type="button" class="choose-box">C2</a>
                        <a type="button" class="choose-box">C3</a>
                        <a type="button" class="choose-box fully">C4</a>
                        <a type="button" class="choose-box fully">C5</a>
                        <a type="button" class="choose-box">C6</a>
                        <a type="button" class="choose-box">C7</a>
                        <a type="button" class="choose-box choose">C8</a>
                        <a type="button" class="choose-box choose">C9</a>
                        <a type="button" class="choose-box choose">C10</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">D1</a>
                        <a type="button" class="choose-box">D2</a>
                        <a type="button" class="choose-box">D3</a>
                        <a type="button" class="choose-box">D4</a>
                        <a type="button" class="choose-box">D5</a>
                        <a type="button" class="choose-box">D6</a>
                        <a type="button" class="choose-box fully">D7</a>
                        <a type="button" class="choose-box fully">D8</a>
                        <a type="button" class="choose-box fully">D9</a>
                        <a type="button" class="choose-box fully">D10</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">E1</a>
                        <a type="button" class="choose-box">E2</a>
                        <a type="button" class="choose-box">E3</a>
                        <a type="button" class="choose-box">E4</a>
                        <a type="button" class="choose-box">E5</a>
                        <a type="button" class="choose-box">E6</a>
                        <a type="button" class="choose-box">E7</a>
                        <a type="button" class="choose-box">E8</a>
                        <a type="button" class="choose-box">E9</a>
                        <a type="button" class="choose-box">E10</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">F1</a>
                        <a type="button" class="choose-box">F2</a>
                        <a type="button" class="choose-box">F3</a>
                        <a type="button" class="choose-box">F4</a>
                        <a type="button" class="choose-box">F5</a>
                        <a type="button" class="choose-box">F6</a>
                        <a type="button" class="choose-box">F7</a>
                        <a type="button" class="choose-box">F8</a>
                        <a type="button" class="choose-box">F9</a>
                        <a type="button" class="choose-box">F10</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">G1</a>
                        <a type="button" class="choose-box">G2</a>
                        <a type="button" class="choose-box">G3</a>
                        <a type="button" class="choose-box">G4</a>
                        <a type="button" class="choose-box">G5</a>
                        <a type="button" class="choose-box">G6</a>
                        <a type="button" class="choose-box">G7</a>
                        <a type="button" class="choose-box">G8</a>
                        <a type="button" class="choose-box">G9</a>
                        <a type="button" class="choose-box">G10</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">H1</a>
                        <a type="button" class="choose-box">H2</a>
                        <a type="button" class="choose-box">H3</a>
                        <a type="button" class="choose-box">H4</a>
                        <a type="button" class="choose-box">H5</a>
                        <a type="button" class="choose-box">H6</a>
                        <a type="button" class="choose-box">H7</a>
                        <a type="button" class="choose-box">H8</a>
                        <a type="button" class="choose-box">H9</a>
                        <a type="button" class="choose-box">H10</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row mb-3">
                        <a type="button" class="choose-box">A11</a>
                        <a type="button" class="choose-box">A12</a>
                        <a type="button" class="choose-box">A13</a>
                        <a type="button" class="choose-box">A14</a>
                        <a type="button" class="choose-box">A15</a>
                        <a type="button" class="choose-box">A16</a>
                        <a type="button" class="choose-box">A17</a>
                        <a type="button" class="choose-box">A18</a>
                        <a type="button" class="choose-box">A19</a>
                        <a type="button" class="choose-box">A20</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box fully">B11</a>
                        <a type="button" class="choose-box fully">B12</a>
                        <a type="button" class="choose-box fully">B13</a>
                        <a type="button" class="choose-box fully">B14</a>
                        <a type="button" class="choose-box">B15</a>
                        <a type="button" class="choose-box">B16</a>
                        <a type="button" class="choose-box">B17</a>
                        <a type="button" class="choose-box">B18</a>
                        <a type="button" class="choose-box">B19</a>
                        <a type="button" class="choose-box">B20</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box fully">C11</a>
                        <a type="button" class="choose-box fully">C12</a>
                        <a type="button" class="choose-box fully">C13</a>
                        <a type="button" class="choose-box fully">C14</a>
                        <a type="button" class="choose-box fully">C15</a>
                        <a type="button" class="choose-box">C16</a>
                        <a type="button" class="choose-box">C17</a>
                        <a type="button" class="choose-box">C18</a>
                        <a type="button" class="choose-box">C19</a>
                        <a type="button" class="choose-box">C20</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box fully">D11</a>
                        <a type="button" class="choose-box fully">D12</a>
                        <a type="button" class="choose-box">D13</a>
                        <a type="button" class="choose-box">D14</a>
                        <a type="button" class="choose-box">D15</a>
                        <a type="button" class="choose-box">D16</a>
                        <a type="button" class="choose-box">D17</a>
                        <a type="button" class="choose-box">D18</a>
                        <a type="button" class="choose-box">D19</a>
                        <a type="button" class="choose-box">D20</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box fully">E11</a>
                        <a type="button" class="choose-box fully">E12</a>
                        <a type="button" class="choose-box fully">E13</a>
                        <a type="button" class="choose-box">E14</a>
                        <a type="button" class="choose-box">E15</a>
                        <a type="button" class="choose-box">E16</a>
                        <a type="button" class="choose-box">E17</a>
                        <a type="button" class="choose-box">E18</a>
                        <a type="button" class="choose-box">E19</a>
                        <a type="button" class="choose-box">E20</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">F11</a>
                        <a type="button" class="choose-box">F12</a>
                        <a type="button" class="choose-box">F13</a>
                        <a type="button" class="choose-box">F14</a>
                        <a type="button" class="choose-box">F15</a>
                        <a type="button" class="choose-box">F16</a>
                        <a type="button" class="choose-box">F17</a>
                        <a type="button" class="choose-box">F18</a>
                        <a type="button" class="choose-box">F19</a>
                        <a type="button" class="choose-box">F20</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">G11</a>
                        <a type="button" class="choose-box">G12</a>
                        <a type="button" class="choose-box">G13</a>
                        <a type="button" class="choose-box">G14</a>
                        <a type="button" class="choose-box">G15</a>
                        <a type="button" class="choose-box">G16</a>
                        <a type="button" class="choose-box">G17</a>
                        <a type="button" class="choose-box">G18</a>
                        <a type="button" class="choose-box">G19</a>
                        <a type="button" class="choose-box">G20</a>
                    </div>
                    <div class="row mb-3">
                        <a type="button" class="choose-box">H11</a>
                        <a type="button" class="choose-box">H12</a>
                        <a type="button" class="choose-box">H13</a>
                        <a type="button" class="choose-box">H14</a>
                        <a type="button" class="choose-box">H15</a>
                        <a type="button" class="choose-box">H16</a>
                        <a type="button" class="choose-box">H17</a>
                        <a type="button" class="choose-box">H18</a>
                        <a type="button" class="choose-box">H19</a>
                        <a type="button" class="choose-box">H20</a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="screen">Layar Bioskop Disini</div>
            </div>
            <div class="row mb-5">
                <div class="col-6 d-flex">
                    <div class="total me-5">
                        <div class="total-title mb-2">Total</div>
                        <div class="total-price">Rp. 150.000</div>
                    </div>
                    <div class="chair">
                        <div class="chair-title mb-2">Kursi</div>
                        <div class="chair-name">C8, C9, C10</div>
                    </div>
                </div>
                <div class="col-6 d-flex">
                    <a class="button voucher">Voucher</a>
                    <a class="button back mx-3">Kembali</a>
                    <a class="button confrim">Konfirmasi</a>
                </div>
            </div>
        </div>
    </section>
@endsection
