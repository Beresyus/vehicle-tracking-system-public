<?php


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public $timestamps = false;

    public const reasons = [
        "Sayın işveren, hastaneye gitmem gerektiği için işyerinden ayrılmak durumunda kaldım. İlgili tarihlerde izninizi rica ediyorum.",
        "Sayın işveren, ailevi sorunlarımdan ötürü ilgili tarihlerde izninizi rica ediyorum.",
        "Sayın işveren, yıllık yasal hakkım olan 2 haftalık tatil iznimi kullanmayı rica ediyorum.",
        "Sayın işveren, önemli bir sağlık muayenem var. O tarihlerde izin almak istiyorum.",
        "Sayın işveren, acil bir işim çıktı. Belirtilen tarihlerde izin alabilir miyim?",
        "Sayın işveren, eğitim amaçlı bir seminere katılmak istiyorum. İlgili tarihlerde izin verir misiniz?",
        "Sayın işveren, kişisel işlerim nedeniyle belirtilen tarihlerde izne ayrılmak istiyorum.",
        "Sayın işveren, çalışma arkadaşımla gün değişikliği yapmak istiyorum. İzin talebim onayınıza sunulmuştur.",
        "Sayın işveren, uzun süredir çalışıyorum ve biraz dinlenmeye ihtiyacım var. Belirtilen tarihlerde izin rica ediyorum.",
        "Sayın işveren, doğum günümde ailemle birlikte olmak istiyorum. İzin talebimi onaylamanızı rica ediyorum.",
        "Sayın işveren, düğün törenim için izin rica ediyorum. Belirtilen tarihlerde izin verebilir misiniz?",
        "Sayın işveren, kişisel işlerim nedeniyle izin rica ediyorum. Anlayışınız için teşekkür ederim.",
        "Sayın işveren, çalışma arkadaşımın doğum günü partisine katılmak için izin istiyorum.",
        "Sayın işveren, ailemle birlikte küçük bir tatil yapmak istiyorum. İlgili tarihlerde izin rica ediyorum.",
        "Sayın işveren, kişisel nedenlerden dolayı bir süre izne ayrılmak istiyorum. İzin talebim kabul edilirse sevinirim.",
        "Sayın işveren, beklenmedik bir sağlık sorunu yaşadım ve izin talep ediyorum. Anlayışınız için teşekkürler.",
        "Sayın işveren, kişisel işlerim nedeniyle bir süreliğine izinli olmak istiyorum. İzin talebimi dikkate almanızı rica ediyorum."
    ];
}
