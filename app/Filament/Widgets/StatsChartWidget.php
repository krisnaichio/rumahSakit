<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\MedicalRecord;
use App\Models\Appointment;
use App\Models\medical_record;
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class StatsChartWidget extends Widget
{
    protected static string $view = 'filament.widgets.stats-chart-widget';

    // Deklarasikan properti untuk jumlah data
    public $patientsCount;
    public $doctorsCount;
    public $medicalRecordsCount;
    public $appointmentsCount;

    public function mount()
    {
        // Ambil jumlah data dari model yang relevan
        $this->patientsCount = Patient::count();
        $this->doctorsCount = Doctor::count();
        $this->medicalRecordsCount = medical_record::count();
        $this->appointmentsCount = Appointment::count();
    }

    /**
     * Render the widget view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('filament.widgets.stats-chart-widget', [
            'patientsCount' => Patient::count(),
            'doctorsCount' => Doctor::count(),
            'medicalRecordsCount' => medical_record::count(),
            'appointmentsCount' => Appointment::count(),
        ]);
    }
    
}
