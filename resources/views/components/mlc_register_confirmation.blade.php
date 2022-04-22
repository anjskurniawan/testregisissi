<div class="bg-biru mx-32 rounded-lg my-4">
    <div class="mx-8 py-8">
        <h1 class="text-white font-Montserrat font-bold text-xl">Mohon periksa kembali data diri dengan benar</h1>
        <form action="/event/mlc/register/success" method="post">
            @csrf
            <table class="table-fixed font-SourceSansPro text-white mt-8">
                <tbody>
                    <thead>
                        <tr>
                            <th class="w-64"></th>
                            <th class="w-[32rem]"></th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="tg-0lax">Nama Lengkap</td>
                        <td class="tg-0lax">{{ $_POST['nama'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Tempat Tanggal Lahir</td>
                        <td class="tg-0lax">{{ $_POST['tempat_lahir'] }},
                            {{ $_POST['tanggal_lahir'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Jenis Kelamin</td>
                        <td class="tg-0lax">{{ $_POST['jenis_kelamin'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Tim</td>
                        <td class="tg-0lax">{{ $_POST['tim'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Kelas</td>
                        <td class="tg-0lax">{{ $_POST['kelas'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Email</td>
                        <td class="tg-0lax">{{ $_POST['email'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Kota Asal</td>
                        <td class="tg-0lax">{{ $_POST['kota_asal'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">No. Whatsapp</td>
                        <td class="tg-0lax">{{ $_POST['no_wa'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Golongan Darah</td>
                        <td class="tg-0lax">{{ $_POST['golongan_darah'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                    <tr>
                        <td class="tg-0lax">Ukuran Jersey</td>
                        <td class="tg-0lax">{{ $_POST['ukuran_jersey'] }}</td>
                        <input type="hidden" name="nama" value="{{ $_POST['nama'] }}">
                    </tr>
                </tbody>
            </table>
            <div class="flex items-center mt-4">
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checkbox-1" class="ml-3 text-xs font-normal text-white">Saya telah memeriksa Kembali data
                    diri
                    saya dengan benar. Saya bertanggung jawab atas keaslian data diri yang saya kirimkan.</label>
            </div>
            <div class="mt-8">
                <button class="bg-kuning w-32 rounded-md py-1 mt-4">
                    <a href="/event/mlc/register/success" class="text-biru font-Montserrat font-bold">Lanjut</a>
                </button>
                {{-- <button class="bg-kuning w-32 rounded-md py-1" type="submit">
                    <a href="/event/mlc/register/success/"  {{ $dataInvoice[0]->nomor_registrasi }}" 
                        class=" text-biru font-Montserrat font-bold">
                        Lanjut</a>
                    Lanjut
                </button> --}}
        </form>
        <a onclick="history.back()">
            <button class="bg-white w-32 rounded-md py-1" type="button">
                Kembali
            </button>
        </a>
    </div>
</div>
</div>
