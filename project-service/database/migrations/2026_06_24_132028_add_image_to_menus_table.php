public function up(): void
{
    Schema::table('menus', function (Blueprint $table) {

        $table->string('image')->nullable();

    });
}

public function down(): void
{
    Schema::table('menus', function (Blueprint $table) {

        $table->dropColumn('image');

    });
}