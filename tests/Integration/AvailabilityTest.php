<?php

namespace Tests\Integration;

use Tests\TestCase;

use App\Activity;
use App\Booking;
use App\BusinessOwner;
use App\Customer;
use App\Employee;
use App\WorkingTime;

use Carbon\Carbon;

class AvailabilityTest extends TestCase
{
    /**
     * Call a function and return true or false
     * If returns true, employee is available and vice versa
     *
     * @return void
     */
    public function testIsEmployeeIsAvailable()
    {

    }

    /**
     * Get the employees availability for all 7 days
     *
     * @return void
     */
    public function testGetEmployeeAvailability()
    {
    	// Create an employee
    	$employee = factory(Employee::class)->create();


    }
}