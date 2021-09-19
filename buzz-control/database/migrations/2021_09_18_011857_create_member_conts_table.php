<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberContsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_conts', function (Blueprint $table) {
            $table->string('code'); #通し番号
            $table->string('member_id'); #メンバーID
            $table->string("member_name"); # 代表者名
            $table->string("corp_name"); # 会社名
            $table->string("mail"); # メール
            $table->string("password"); # パスワード
            $table->string("remark"); # 備考
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
        Schema::dropIfExists('member_conts');
    }
}
