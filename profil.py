# Membuat kelas DataDiri
class DataDiri:
    def __init__(self, nama, umur, alamat):
        self.nama = nama
        self.umur = umur
        self.alamat = alamat

    def tampilkan_data(self):
        print("Nama: ", self.nama)
        print("Umur: ", self.umur)
        print("Alamat: ", self.alamat)


# Membuat objek data_diri
data_diri = DataDiri("Yuga", 16, "cisalak")
data_diri.tampilkan_data()
