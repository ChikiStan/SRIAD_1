<?php
include 'rb/db.php';
class patient
{
    public static function add_new() //Добавление нового пациента
    {

            $error=array();
            if($_POST['first_name']==null)
            { array_push($error,'Необходимо ввести имя пациента');
                if($_POST['second_name']==null)
                { array_push($error,'Необходимо ввести фамилию пациента');
                    if($_POST['male']==null)
                    { array_push($error,'Необходимо ввести пол пациента');
                        if($_POST['birthday']==null)
                        { array_push($error,'Необходимо ввести дату рождения пациента');
                            if($_POST['weight']==null)
                            { array_push($error,'Необходимо ввести вес пациента');
                                if($_POST['height']==null)
                                { array_push($error,'Необходимо ввести рост пациента');}}}}}}

                if($_POST['first_name']!=null and $_POST['second_name']!=null and $_POST['middle_name']!=null and $_POST['male']!=null and $_POST['birthday']!=null and $_POST['height']!=null and $_POST['weight']!=null)
                {$patient = R::dispense('patients');
                    $patient->first_name = htmlspecialchars($_POST['first_name']);
                $patient->second_name =htmlspecialchars($_POST['second_name']);
                $patient->middle_name =htmlspecialchars($_POST['middle_name']);
                $patient->male = htmlspecialchars($_POST['male']);
                $patient->birthday = htmlspecialchars($_POST['birthday']);
                $patient->height = htmlspecialchars($_POST['height']);
                $patient->weight = htmlspecialchars($_POST['weight']);
                $patient->diagnosis =htmlspecialchars($_POST['diagnosis']);
                R::store($patient);}
                //print_r($error);
        }
        public static function show_all(): array //Показать всех пациентов
        {
                return $patients = R::findAll('patients');
        }
        public static function show($id): ?\RedBeanPHP\OODBBean //Показать одного пациента
        {
                return $patient = R::findOne('patients','id=?',[$id]);
        }
        public static function delete($id)
        {
                R::hunt('patients','id=?',[$id]);
        }
        public static function edit($id)
        {
            $patient = R::findOne('patients','id=?',[$id]);
            $error=array();
            if($_POST['first_name']==null)
            { array_push($error,'Необходимо ввести имя пациента');
                if($_POST['second_name']==null)
                { array_push($error,'Необходимо ввести фамилию пациента');
                    if($_POST['male']==null)
                    { array_push($error,'Необходимо ввести пол пациента');
                        if($_POST['birthday']==null)
                        { array_push($error,'Необходимо ввести дату рождения пациента');
                            if($_POST['weight']==null)
                            { array_push($error,'Необходимо ввести вес пациента');
                                if($_POST['height']==null)
                                { array_push($error,'Необходимо ввести рост пациента');}}}}}}

            if($_POST['first_name']!=null and $_POST['second_name']!=null and $_POST['middle_name']!=null and $_POST['male']!=null and $_POST['birthday']!=null and $_POST['height']!=null and $_POST['weight']!=null)
            {   $patient->first_name = htmlspecialchars($_POST['first_name']);
                $patient->second_name =htmlspecialchars($_POST['second_name']);
                $patient->middle_name =htmlspecialchars($_POST['middle_name']);
                $patient->male = htmlspecialchars($_POST['male']);
                $patient->birthday = htmlspecialchars($_POST['birthday']);
                $patient->height = htmlspecialchars($_POST['height']);
                $patient->weight = htmlspecialchars($_POST['weight']);
                $patient->diagnosis =htmlspecialchars($_POST['diagnosis']);
                R::store($patient);}

        }

}

class values
{
    public static function head_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('head');
        $value->axel_x = htmlspecialchars($_POST['axel_x']);
        $value->axel_y = htmlspecialchars($_POST['axel_y']);
        $value->axel_z = htmlspecialchars($_POST['axel_z']);
        $value->gyro_x = htmlspecialchars($_POST['gyro_x']);
        $value->gyro_y = htmlspecialchars($_POST['gyro_y']);
        $value->gyro_z = htmlspecialchars($_POST['gyro_z']);
        $value->magn_x = htmlspecialchars($_POST['magn_x']);
        $value->magn_y = htmlspecialchars($_POST['magn_y']);
        $value->magn_z = htmlspecialchars($_POST['magn_z']);
        $value->time = time();
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function shoulders_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('shoulders');
        $value->axel_x_right = htmlspecialchars($_POST['axel_x_right']);
        $value->axel_y_right = htmlspecialchars($_POST['axel_y_right']);
        $value->axel_z_right = htmlspecialchars($_POST['axel_z_right']);
        $value->gyro_x_right = htmlspecialchars($_POST['gyro_x_right']);
        $value->gyro_y_right = htmlspecialchars($_POST['gyro_y_right']);
        $value->gyro_z_right = htmlspecialchars($_POST['gyro_z_right']);
        $value->magn_x_right = htmlspecialchars($_POST['magn_x_right']);
        $value->magn_y_right = htmlspecialchars($_POST['magn_y_right']);
        $value->magn_z_right = htmlspecialchars($_POST['magn_z_right']);
        $value->axel_x_left = htmlspecialchars($_POST['axel_x_left']);
        $value->axel_y_left = htmlspecialchars($_POST['axel_y_left']);
        $value->axel_z_left = htmlspecialchars($_POST['axel_z_left']);
        $value->gyro_x_left = htmlspecialchars($_POST['gyro_x_left']);
        $value->gyro_y_left = htmlspecialchars($_POST['gyro_y_left']);
        $value->gyro_z_left = htmlspecialchars($_POST['gyro_z_left']);
        $value->magn_x_left = htmlspecialchars($_POST['magn_x_left']);
        $value->magn_y_left = htmlspecialchars($_POST['magn_y_left']);
        $value->magn_z_left = htmlspecialchars($_POST['magn_z_left']);
        $value->time = time();
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function hand_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('hand');
        $value->axel_x_right = htmlspecialchars($_POST['axel_x_right']);
        $value->axel_y_right = htmlspecialchars($_POST['axel_y_right']);
        $value->axel_z_right = htmlspecialchars($_POST['axel_z_right']);
        $value->gyro_x_right = htmlspecialchars($_POST['gyro_x_right']);
        $value->gyro_y_right = htmlspecialchars($_POST['gyro_y_right']);
        $value->gyro_z_right = htmlspecialchars($_POST['gyro_z_right']);
        $value->magn_x_right = htmlspecialchars($_POST['magn_x_right']);
        $value->magn_y_right = htmlspecialchars($_POST['magn_y_right']);
        $value->magn_z_right = htmlspecialchars($_POST['magn_z_right']);
        $value->axel_x_left = htmlspecialchars($_POST['axel_x_left']);
        $value->axel_y_left = htmlspecialchars($_POST['axel_y_left']);
        $value->axel_z_left = htmlspecialchars($_POST['axel_z_left']);
        $value->gyro_x_left = htmlspecialchars($_POST['gyro_x_left']);
        $value->gyro_y_left = htmlspecialchars($_POST['gyro_y_left']);
        $value->gyro_z_left = htmlspecialchars($_POST['gyro_z_left']);
        $value->magn_x_left = htmlspecialchars($_POST['magn_x_left']);
        $value->magn_y_left = htmlspecialchars($_POST['magn_y_left']);
        $value->magn_z_left = htmlspecialchars($_POST['magn_z_left']);
        $value->time = time();
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function weist_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('weist');
        $value->axel_x = htmlspecialchars($_POST['axel_x']);
        $value->axel_y = htmlspecialchars($_POST['axel_y']);
        $value->axel_z = htmlspecialchars($_POST['axel_z']);
        $value->gyro_x = htmlspecialchars($_POST['gyro_x']);
        $value->gyro_y = htmlspecialchars($_POST['gyro_y']);
        $value->gyro_z = htmlspecialchars($_POST['gyro_z']);
        $value->magn_x = htmlspecialchars($_POST['magn_x']);
        $value->magn_y = htmlspecialchars($_POST['magn_y']);
        $value->magn_z = htmlspecialchars($_POST['magn_z']);
        $value->time = time();
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function knees_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('knees');
        $value->axel_x_right = htmlspecialchars($_POST['axel_x_right']);
        $value->axel_y_right = htmlspecialchars($_POST['axel_y_right']);
        $value->axel_z_right = htmlspecialchars($_POST['axel_z_right']);
        $value->gyro_x_right = htmlspecialchars($_POST['gyro_x_right']);
        $value->gyro_y_right = htmlspecialchars($_POST['gyro_y_right']);
        $value->gyro_z_right = htmlspecialchars($_POST['gyro_z_right']);
        $value->magn_x_right = htmlspecialchars($_POST['magn_x_right']);
        $value->magn_y_right = htmlspecialchars($_POST['magn_y_right']);
        $value->magn_z_right = htmlspecialchars($_POST['magn_z_right']);
        $value->axel_x_left = htmlspecialchars($_POST['axel_x_left']);
        $value->axel_y_left = htmlspecialchars($_POST['axel_y_left']);
        $value->axel_z_left = htmlspecialchars($_POST['axel_z_left']);
        $value->gyro_x_left = htmlspecialchars($_POST['gyro_x_left']);
        $value->gyro_y_left = htmlspecialchars($_POST['gyro_y_left']);
        $value->gyro_z_left = htmlspecialchars($_POST['gyro_z_left']);
        $value->magn_x_left = htmlspecialchars($_POST['magn_x_left']);
        $value->magn_y_left = htmlspecialchars($_POST['magn_y_left']);
        $value->magn_z_left = htmlspecialchars($_POST['magn_z_left']);
        $value->time = time();
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function feet_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('feet');
        $value->axel_x_right = htmlspecialchars($_POST['axel_x_right']);
        $value->axel_y_right = htmlspecialchars($_POST['axel_y_right']);
        $value->axel_z_right = htmlspecialchars($_POST['axel_z_right']);
        $value->gyro_x_right = htmlspecialchars($_POST['gyro_x_right']);
        $value->gyro_y_right = htmlspecialchars($_POST['gyro_y_right']);
        $value->gyro_z_right = htmlspecialchars($_POST['gyro_z_right']);
        $value->magn_x_right = htmlspecialchars($_POST['magn_x_right']);
        $value->magn_y_right = htmlspecialchars($_POST['magn_y_right']);
        $value->magn_z_right = htmlspecialchars($_POST['magn_z_right']);
        $value->axel_x_left = htmlspecialchars($_POST['axel_x_left']);
        $value->axel_y_left = htmlspecialchars($_POST['axel_y_left']);
        $value->axel_z_left = htmlspecialchars($_POST['axel_z_left']);
        $value->gyro_x_left = htmlspecialchars($_POST['gyro_x_left']);
        $value->gyro_y_left = htmlspecialchars($_POST['gyro_y_left']);
        $value->gyro_z_left = htmlspecialchars($_POST['gyro_z_left']);
        $value->magn_x_left = htmlspecialchars($_POST['magn_x_left']);
        $value->magn_y_left = htmlspecialchars($_POST['magn_y_left']);
        $value->magn_z_left = htmlspecialchars($_POST['magn_z_left']);
        $value->time = time();
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function head_r_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('headr');
        $value->trajectory = htmlspecialchars($_POST['trajectory']);
        $value->time = htmlspecialchars($_POST['time']);
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function shoulders_r_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('shouldersr');
        $value->amplitude = htmlspecialchars($_POST['trajectory']);
        $value->time = htmlspecialchars($_POST['time']);
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function hand_r_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('handr');
        $value->trajectory = htmlspecialchars($_POST['trajectory']);
        $value->mass_center = htmlspecialchars($_POST['mass_center']);
        $value->time = htmlspecialchars($_POST['time']);
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function weist_r_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('weistr');
        $value->amplitude = htmlspecialchars($_POST['amplitude']);
        $value->coordination = htmlspecialchars($_POST['coordinnation']);
        $value->time = htmlspecialchars($_POST['time']);
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function knees_r_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('kneesr');
        $value->amplitude = htmlspecialchars($_POST['amplitude']);
        $value->time = htmlspecialchars($_POST['time']);
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function feet_r_add_new($id)
    {
        $experiment = R::findOne('experiment','id=?',[$id]);
        $value = R::dispense('feetr');
        $value->amplitude = htmlspecialchars($_POST['amplitude']);
        $value->tempo = htmlspecialchars($_POST['tempo']);
        $value->rhythm = htmlspecialchars($_POST['rhythm']);
        $value->time = htmlspecialchars($_POST['time']);
        $experiment->ownExperimentList[]=$value;
        R::store($experiment);
    }
    public static function head_show($id)
    {
        return $values = R::findAll('head','experiment_id=?',[$id]);
    }
    public static function head_r_show($id)
    {
        return $values = R::findAll('head_r','experiment_id=?',[$id]);
    }
    public static function shoulders_show($id)
    {
        return $values = R::findAll('shoulders','experiment_id=?',[$id]);
    }
    public static function shoulders_r_show($id)
    {
        return $values = R::findAll('shoulders_r','experiment_id=?',[$id]);
    }
    public static function hand_show($id)
    {
        return $values = R::findAll('hand','experiment_id=?',[$id]);
    }
    public static function hand_r_show($id)
    {
        return $values = R::findAll('hand_r','experiment_id=?',[$id]);
    }
    public static function weist_show($id)
    {
        return $values = R::findAll('weist','experiment_id=?',[$id]);
    }
    public static function weist_r_show($id)
    {
        return $values = R::findAll('weist_r','experiment_id=?',[$id]);
    }
    public static function knees_show($id)
    {
        return $values = R::findAll('knees','experiment_id=?',[$id]);
    }
    public static function knees_r_show($id)
    {
        return $values = R::findAll('knees_r','experiment_id=?',[$id]);
    }
    public static function feet_show($id)
    {
        return $values = R::findAll('feet','experiment_id=?',[$id]);
    }
    public static function feet_r_show($id)
    {
        return $values = R::findAll('feet_r','experiment_id=?',[$id]);
    }
    public static function show_all($id)
    {
        return $experiment = R::findAll('experiment','patients_id=?',[$id]);

    }
    public static function experiment_new($id)
    {
        $patient=R::findOne('patients','id=?',[$id]);
        $experiment=R::dispense('experiment');
        $experiment->date_start=time();
        $patient->ownExperimentList[]=$experiment;
        R::store($patient);
    }

    public static function experiments_show($id)
    {
        $experiment=R::findAll('experiment','patients_id=?',[$id]);
        return $experiment;
    }

    public static function algorythm($values)
    {
        $stationary = array();
        $vector_len = array('');
        foreach ($values as $value) {
            array_push($vector_len, sqrt($value->axel_x_right * $value->axel_x_right + $value->axel_y_right * $value->axel_y_right + $value->axel_z_right * $value->axel_z_right));//Точки стационарности
        }
        //Фильтры
        foreach ($vector_len as $value) {
            if ($value >= 0.05 * 9.81)
                array_push($stationary, 1);
            else
                array_push($stationary, 0);
        }
        return $stationary;

        //Кватерионы
        
    }
}