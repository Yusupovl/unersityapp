@extends('layouts.admin')

@section('content')

<form id="contact" action="{{route('guest.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    <div class="row">
      <div class="col-lg-12">
        <h2>KELING,  MUROJATLANAMIZ</h2>
      </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
        @endif

      <div class="col-lg-6">

        <div class="col-lg-12">
            <fieldset>
                <label for="">Ism</label>
              <input name="ism" type="text" id="name" placeholder="ISMINGIZ... " required="">
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
                <label for="">Familya</label>
            <input name="familya" type="text" id="email"  placeholder="FAMILYANGIZ..." required="">
          </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
                <label for="">Sharif</label>
              <input name="sharif" type="text" id="subject" placeholder="SHARIFINGIZ..." required="">
            </fieldset>
          </div>

            <div class="col-lg-12">
                <fieldset>
                    <label for="">Tug'ilgan sana</label>
                    <input type="date" name="sana">
                </fieldset>
            </div>

            <div class="col-lg-12">
                <fieldset>
                    <label for="">Shaxsiy Telefon raqam</label>
                  <input name="tel_raqam" type="text" id="subject" placeholder="+998901234567  " required="">
                </fieldset>
            </div>

            <div class="col-lg-12">
                <fieldset>
                    <label for="">Qo'shimcha Telefon raqam</label>
                  <input name="qosh_tel_raqam" type="text" id="subject" placeholder="+998901234567  " required="">
                </fieldset>


            <div class="col-lg-12">
                <fieldset>
                    <label for="">Maktab(kollej,litsey) tamomlagan sanasi</label>
                    <input type="date" name="tamomlagan_sanasi">
                </fieldset>
            </div>

            <div class="col-lg-12">
                <fieldset>
                    <label for="">Diplom yoki atestat raqami</label>
                    <input type="text" name="diplom_raqami">
                </fieldset>
            </div>


            <div class="col-lg-12">
                <fieldset>
                    <label for="">Fakultetlar</label>
                    <select class="form-select" name="fakultet" id="inputGroupSelect01">
                        <option value="1">Maktabgacha ta'lim</option>
                        <option value="2">Pedagogika va Psixologiya</option>
                        <option value="3">Iqtisodiyot</option>
                        <option value="4">Jismoniy tarbiya va sport</option>
                        <option value="5">Boshlang'ich ta'lim</option>
                      </select>
                </fieldset>
            </div>

            <div class="col-lg-12">
                <fieldset>
                    <label for="">Ta'lim shakli</label>
                    <select class="form-select" name="talim_shakli" id="inputGroupSelect01">
                        <option value="1">Kunduzgi</option>
                        <option value="2">Kechgi</option>
                        <option value="3">Sirtqi</option>
                      </select>
                </fieldset>
            </div>

            

      </div>


    <div class="col-lg-6">

        <div class="col-lg-12">
            <fieldset>
                <label for="">Mamlakat</label>
                <select class="form-select" name="mamlakat" id="inputGroupSelect01">
                    <option value="1">O'zbekiston</option>
                  </select>
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Viloyat</label>
                <select class="form-select" name="viloyat" id="inputGroupSelect01">
                    <option value="1">Andijon viloyati</option>
                    <option value="2">Namangan viloyati</option>
                    <option value="3">Farg'ona viloyati</option>
                    <option value="4">Toshkent viloyati</option>
                    <option value="5">Toshkent shahri</option>
                    <option value="6">Sirdaryo viloyati</option>
                    <option value="7">Jizzax viloyati</option>
                    <option value="8">Samarqand viloyati</option>
                    <option value="9">Qashqadaryo viloyati</option>
                    <option value="10">Surxondaryo voloyati</option>
                    <option value="11">Navoiy viloyati</option>
                    <option value="12">Buxoro viloyati</option>
                    <option value="13">Xorazm viloyati</option>
                    <option value="14">Qoraqalpoqiston Respublikasi</option>
                  </select>
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Manzilingiz</label>
              <input name="manzil" type="text" id="subject" placeholder="MANZILINGIZ...  " required="">
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Fuqaroligi</label>
              <input name="fuqaroligi" type="text" id="subject" placeholder="Fuqaroligi...  " required="">
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Millati</label>
                <select class="form-select" name="millati" id="inputGroupSelect01">
                    <option value="1">o'zbek</option>
                    <option value="2">rus</option>
                    <option value="1">tojik</option>
                    <option value="1">qozoq</option>
                    <option value="1">qirg'iz</option>
                  </select>
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Pasport seriya raqami</label>
                <input type="text" name="pasport_raqami">
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="pasport_rasm" class="form-label">Pasport rasmini yuklang</label>
                <input class="form-control" type="file" name="pasport_rasm" >
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Qayerni tamomlagansiz</label>
                <select class="form-select" name="tomomlagani" id="inputGroupSelect01">
                    <option value="1">maktab</option>
                    <option value="2">litsey</option>
                    <option value="3">kollej</option>
                  </select>
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Maktab(kollej,Litsey) nomi</label>
                <input type="text" name="tamomlagan_nomi">
            </fieldset>
        </div>

        <div class="col-lg-12">
            <fieldset>
                <label for="">Maktab(kollej,litsey)  manzili</label>
              <input name="tamomlagan_manzil" type="text" id="subject" placeholder="MANZILI...  " required="">
            </fieldset>
        </div>

       
    </div>


          {{-- <div class="col-lg-12">
        <fieldset>
          <textarea name="message" type="text" class="form-control" id="message" placeholder="SZINING XABARINGIZ..." required=""></textarea>
        </fieldset>
      </div>--}}
      <div class="col-lg-12">
        <fieldset>
          <input type="submit" id="form-submit" value="Saqlash">
        </fieldset>
      </div> 

    </div>
</form>

@endsection


