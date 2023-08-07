<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

/**
 * This is the model class for table "berita".
 *
 * @property int $id
 * @property string $judul
 * @property string $konten
 * @property string $penulis
 * @property string $tanggal_terbit
 * @property string $tanggal_diperbarui
 * @property string $photo
 * @property string|null $tanggal_terbit
 * @property string|null $tanggal_diperbarui
 * @property string $summary

 */
class Berita extends \app\components\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'konten', 'penulis', 'tanggal_terbit', 'photo', 'summary'], 'required'],
            [['konten'], 'string'],
            [['created_by', 'updated_by', ], 'integer'],
            [['tanggal_terbit', 'tanggal_diperbarui',], 'safe'],
            [['judul'], 'string', 'max' => 255],
            [['penulis'], 'string', 'max' => 100],
            [['photo'], 'string', 'max' => 500],
            [['summary'], 'string', 'max' => 500],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'konten' => 'Konten',
            'penulis' => 'Penulis',
            'tanggal_terbit' => 'Tanggal Terbit',
            'tanggal_diperbarui' => 'Tanggal diperbarui',
            'photo' => 'foto',
            'summary' => 'ringkasan',

        ];
    }


    public function upload()
    {
        $photo = UploadedFile::getInstance($this, 'photo');
        $tmpPhoto = 'uploads/berita/' . $photo->baseName . '.' . $photo->extension;
        if ($photo->saveAs($tmpPhoto)) {
            $this->photo = $tmpPhoto;
            return true;
        } else {
            return false;
        }
    }

    public function formFields()
    {
        return [
            [
                'name'=>'Judul',
                'type'=>'text',
            ],
            [
                'name'=>'link',
                'type'=>'text',
            ],
            [
                'name'=>'summary',
                'type'=>'text',
            ],
            [
                'name'=>'konten',
                'type'=>'richtext',
            ],
            [
                'name'=>'photo',
                'type'=>'file',
                'uploadFolder'=>'@webroot/uploads/blog',
                'isImage'=>true,
                'hint'=>'Ukuran gambar yang optimal adalah 360x257 pixel',
            ],
            [
                'name'=>'date',
                'type'=>'datepicker',
            ],
            
        ];
    }

}
