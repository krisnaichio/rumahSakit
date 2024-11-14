<div class="p-6 rounded-xl shadow-xl mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card Total Pasien -->
        <div class="flex flex-col justify-between h-56">
            <h3 class="text-2xl font-bold">Total Pasien</h3>
            <p class="text-4xl mt-4 font-semibold">{{ $patientsCount }}</p>
        </div>

        <!-- Card Total Dokter -->
        <div class="flex flex-col justify-between h-56">
            <h3 class="text-2xl font-bold">Total Dokter</h3>
            <p class="text-4xl mt-4 font-semibold">{{ $doctorsCount }}</p>
        </div>

        <!-- Card Total Rekam Medis -->
        <div class="flex flex-col justify-between h-56">
            <h3 class="text-2xl font-bold">Total Rekam Medis</h3>
            <p class="text-4xl mt-4 font-semibold">{{ $medicalRecordsCount }}</p>
        </div>

        <!-- Card Total Janji Temu -->
        <div class="flex flex-col justify-between h-56">
            <h3 class="text-2xl font-bold">Total Janji Temu</h3>
            <p class="text-4xl mt-4 font-semibold">{{ $appointmentsCount }}</p>
        </div>
    </div>
</div>
