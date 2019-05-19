<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('garbage_price_lists', function (Blueprint $table) {
            /**
             * @foreign table garbages,garbage bank
             */
            $table->unsignedInteger('garbage_id');
            $table->foreign('garbage_id')->references('id')->on('garbages')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('garbage_bank_id');
            $table->foreign('garbage_bank_id')->references('id')->on('garbage_banks')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable(); 

        });

        Schema::table('garbages', function (Blueprint $table) {
            /**
             * @foreign table recycle
             */
            $table->unsignedInteger('recycle_id');
            $table->foreign('recycle_id')->references('id')->on('recycles')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });

        Schema::table('garbage_banks', function (Blueprint $table) {
            /**
             * @foreign table garbage officer
             */
            $table->unsignedInteger('garbage_officer_id');
            $table->foreign('garbage_officer_id')->references('id')->on('garbage_officers')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });

        Schema::table('savings', function (Blueprint $table) {
            /**
             * @foreign table garbages,customers
             */
            $table->unsignedInteger('garbage_id');
            $table->foreign('garbage_id')->references('id')->on('garbages')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->string('created_by');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });   

        Schema::table('customers', function (Blueprint $table) {
            /**
             * @foreign table garbage_banks
             */
            // $table->unsignedInteger('garbage_bank_id');
            // $table->foreign('garbage_bank_id')->references('id')->on('garbage_banks')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->string('created_by')->default('admin');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });   
            Schema::table('users', function (Blueprint $table) {
            /**
             * @foreign table garbage_banks
             */
            // $table->unsignedInteger('garbage_bank_id');
            // $table->foreign('garbage_bank_id')->references('id')->on('garbage_banks')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->string('created_by')->default('admin');
            $table->string('update_by')->nullable();
            $table->string('deleted_by')->nullable();
            
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}