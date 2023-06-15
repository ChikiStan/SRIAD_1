<?php
include '../function/function.php';

const SECRET_KEY = '123';// Секретный ключ

function API()
{
    if(isset($_POST))
    {
        if($_POST['secret_key']==SECRET_KEY)// Проверка на совпадения секретного ключа
        { switch ($_POST['method'])
        {
            // Добавление нового пользователя;
            case 'patient_add_new':
                patient::add_new();
                break;
            //Все пользователи
            case 'patient_show_all':
                $patients = patient::show_all();
                echo json_encode($patients,JSON_UNESCAPED_UNICODE);
                break;
            case 'patient_show':
                if(isset($_POST['id']))
                {
                    $patient = patient::show();
                    echo json_encode($patient,JSON_UNESCAPED_UNICODE);
                }
                break;
            case 'patient_delete':
                if(isset($_POST['id']))
                {
                    patient::delete($_POST['id']);
                }
                break;

            case 'patient_edit':
                if(isset($_POST['id']))
                {
                    patient::edit($_POST['id']);
                }
                break;
            case 'values_head_add_new':
                values::head_add_new($_POST['id']);
                break;
            case 'values_shoulders_add_new':
                values::shoulders_add_new($_POST['id']);
                break;
            case 'values_hand_add_new':
                values::hand_add_new($_POST['id']);
                break;
            case 'values_weist_add_new':
                values::weist_add_new($_POST['id']);
                break;
            case 'values_knees_add_new':
                values::knees_add_new($_POST['id']);
                break;
            case 'values_feet_add_new':
                values::feet_add_new($_POST['id']);
                break;
            case 'values_head_r_add_new':
                values::head_r_add_new($_POST['id']);
                break;
            case 'values_shoulders_r_add_new':
                values::shoulders_r_add_new($_POST['id']);
                break;
            case 'values_r_hand_add_new':
                values::hand_r_add_new($_POST['id']);
                break;
            case 'values_weist_r_add_new':
                values::weist_r_add_new($_POST['id']);
                break;
            case 'values_knees_r_add_new':
                values::kness_r_add_new($_POST['id']);
                break;
            case 'values_feet_r_add_new':
                values::feet_r_add_new($_POST['id']);
                break;
            case 'values_head_show':
                 echo json_encode(values::head_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_shoulders_show':
                echo json_encode(values::shoulders_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_hand_show':
                echo json_encode(values::hand_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_weist_show':
                echo json_encode(values::weist_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_knees_show':
                echo json_encode(values::knees_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_feet_show':
                echo json_encode(values::feet_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_head_r_show':
                echo json_encode(values::head_r_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_shoulders_r_show':
                echo json_encode(values::shoulders_r_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_hand_r_show':
                echo json_encode(values::hand_r_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_weist_r_show':
                echo json_encode(values::weist_r_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_knees_r_show':
                echo json_encode(values::knees_r_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_feet_r_show':
                echo json_encode(values::feet_r_show($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_show_all':
                echo json_encode(values::show_all($_POST['id']),JSON_UNESCAPED_UNICODE);
                break;
            case 'values_experiment_new':
                values::experiment_new($_POST['id']);
                break;

        }

        }
        else
            echo 'invalid secret_key';

    }}
API();
