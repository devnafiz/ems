<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registers', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->unique();
            $table->string('nationality')->nullable();
            $table->string('passport_number')->unique();
            $table->string('date_of_birth')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('obtain_single_entry_visa')->nullable();
            $table->string('applicant_email_id')->nullable();
            $table->string('sex')->nullable();
            $table->string('applicant_permanent_add')->nullable();
            $table->string('applicant_postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('resident_number')->nullable();
            $table->string('programme')->nullable();
            $table->string('subject')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('passport_issued_place')->nullable();
            $table->string('passport_expiry_date')->nullable();
            $table->string('applicant_mobile_number')->nullable();
            $table->string('agent_email_id')->nullable();
            $table->string('marital')->nullable();
            $table->string('applicant_city')->nullable();
            $table->string('applicant_state')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('as_above')->nullable();
            $table->string('correspondence_address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country_2')->nullable();
            $table->string('resident_number_2')->nullable();
            $table->string('father_tel_no')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('guardian_tel_no')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('year_of_passing')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('mobile_number_2')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_tel_no')->nullable();
            $table->string('gurdian_name')->nullable();
            $table->string('gurdian_occupation')->nullable();
            $table->string('grade')->nullable();
            $table->string('applicant_name_2')->nullable();
            $table->string('study')->nullable();
            $table->string('passport_number_2')->nullable();
            $table->string('visa_pass')->nullable();
            $table->string('health_declaration')->nullable();
            $table->string('health_declaration_file')->nullable();
            $table->string('passport_scanned')->nullable();
            $table->string('passport_scanned_file')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo_file')->nullable();
            $table->string('academic_certificate_1')->nullable();
            $table->string('academic_certificate_file_1')->nullable();
            $table->string('academic_certificate_2')->nullable();
            $table->string('academic_certificate_file_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_registers');
    }
}
