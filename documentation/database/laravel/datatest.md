    public function up(): void
    {
        Schema::create('user_full_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users');
            $table->bigInteger('usernid');
            $table->binary('userphoto');
            $table->boolean('is_available');
            $table->char('fullname', 100);
            $table->dateTimeTz('account_created_at');
            $table->dateTime('last_login');
            $table->date('created_at');
            $table->double('weight', 3, 2);
            $table->enum('gender', ['male', 'female', 'third']);
            $table->float('float_column', 8, 2);
            $table->geometryCollection('user_last_position');
            $table->geometry('geometry_column');
            $table->id();
            $table->increments('increments_column');
            $table->integer('integer_column');
            $table->ipAddress('ip_address_column');
            $table->json('json_column');

            //user location
            $table->point('user_last_position')->nullable();
            $table->lineString('linestring_column');
            $table->polygon('polygon_column');
            $table->polygon('polygon_with_hole_column')->polygonWithHoles();
            $table->geometryCollection('collection_column');


            // user device information
            $table->ipAddress('ip_address');
            $table->string('user_region');
            $table->string('mobile_carrier');
            $table->string('device_model');
            $table->string('network_type');
            $table->string('screen_resolution');
            $table->string('operating_system');
            $table->string('app_name');
            $table->string('file_type');
            $table->text('keystroke_pattern');
            $table->string('audio_settings');
            $table->string('connected_audio_device');
            $table->string('login_location');
            $table->timestamps();

            // user Daily Task
            $table->string('title');
            $table->text('description');
            $table->boolean('completed')->default(false);

            // user_communities
            $table->string('social_name');
           $table->text('description')->nullable();
        });
    }
