<?php

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('faq')->delete();
        
		\DB::table('faq')->insert(array (
			1 => 
			array (
				'id' => '1',
				'question' => 'Welche Sendungen kann ich über wundership verschicken?',
				'answer' => 'Fast alles! Egal ob Dein Umzugskarton nicht mehr ins Auto gepasst hat, oder ein spontaner Skiurlaub vor der Tür steht: Mit wundership kannst du außer gefährlichen oder verbotenen Stoffen alles versenden. Probier es aus!',
				'keywords' => 'was/versenden/schicken/sendung',
			),
			2 => 
			array (
				'id' => '2',
				'question' => 'Wohin kann ich meine Sendung schicken und sind auch Sendungen ins Ausland möglich?',
				'answer' => 'Grundsätzlich ist ein Versand momentan zunächst ersteinmal zwischen Hamburg und Berlin möglich. Wir hoffen so, wundership durch Dein Feedback noch besser machen zu können, bevor wir weitere Städte und Routen hinzufügen.',
				'keywords' => 'wohin/sendung/ausland/versenden',
			),
			3 => 
			array (
				'id' => '3',
				'question' => 'Wie lange dauert eine Sendung bei wundership?',
				'answer' => 'Wenn Du Deine Sendung einstellst, können Kuriere sie sofort sehen. Es kann also sein, dass Sie so schnell wie möglich bei Dir abgeholt wird. Gerade in der Anfangsphase bitten wir Dich jedoch noch ein wenig um Geduld. Wir machen wundership bekannter und hoffen, so auch für jede Sendung so schnell es geht einen Kurier zu finden.',
				'keywords' => 'lange/dauert/sendung/zeit',
			),
			
		));
	}

}
