<?php
use Illuminate\Database\Seeder;
use Wundership\Address;
use Wundership\Immediate;
use Wundership\Shipment;
use Wundership\Spec;

class ShipmentTableSeeder extends Seeder {

	public function run()
	{
		/* Unveröffentlicht - unvollständig */
		$shipment = new Shipment([
			'title' => 'Unveröffentlicht, unvollständig',
			'user_id' => 2
		]);
		$shipment->save();
		/* /Unveröffentlicht - unvollständig */

		/* Unveröffentlicht - vollständig */
		$shipment = new Shipment([
			'title' => 'Unveröffentlicht, vollständig',
			'user_id' => 2,
			'size_id' => 2,
			'origin_id' => 1,
			'destination_id' => 2,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00'
		]);
		$immediate = new Immediate(['price' => 14]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Unveröffentlicht - vollständig */

		/* Veröffentlicht - HH > B */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, HH > B',
			'user_id' => 2,
			'size_id' => 2,
			'origin_id' => 1,
			'destination_id' => 2,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 14]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Veröffentlicht - HH > B */

		/* Veröffentlicht - B > HH */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH',
			'user_id' => 2,
			'size_id' => 2,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 16]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Veröffentlicht - B > HH */

		/* Veröffentlicht - B > HH - Brief */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Brief',
			'user_id' => 2,
			'size_id' => 1,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 5]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Veröffentlicht - B > HH - Brief */

		/* Veröffentlicht - B > HH - Päckchen */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Päckchen',
			'user_id' => 2,
			'size_id' => 2,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 11]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Veröffentlicht - B > HH - Päckchen */

		/* Veröffentlicht - B > HH - Paket */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Paket',
			'user_id' => 2,
			'size_id' => 3,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 14]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Veröffentlicht - B > HH - Paket */

		/* Veröffentlicht - B > HH - Großgerät */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Großgerät',
			'user_id' => 2,
			'size_id' => 4,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 21]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Veröffentlicht - B > HH - Großgerät */

		/* Veröffentlicht - B > HH - Möbel */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Möbel',
			'user_id' => 2,
			'size_id' => 5,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 28]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		/* /Veröffentlicht - B > HH - Möbel */

		/* Veröffentlicht - B > HH - Paket - Verderblich */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Paket, Verderblich',
			'user_id' => 2,
			'size_id' => 3,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 5]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		$shipment->specs()->save(Spec::findOrFail(1));
		/* /Veröffentlicht - B > HH - Paket - Verderblich */

		/* Veröffentlicht - B > HH - Paket - Sperrig */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Paket, Sperrig',
			'user_id' => 2,
			'size_id' => 3,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 5]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		$shipment->specs()->save(Spec::findOrFail(2));
		/* /Veröffentlicht - B > HH - Paket - Sperrig */

		/* Veröffentlicht - B > HH - Paket - Lebendig */
		$shipment = new Shipment([
			'title' => 'Veröffentlicht, B > HH, Paket, Lebendig',
			'user_id' => 2,
			'size_id' => 3,
			'origin_id' => 2,
			'destination_id' => 1,
			'collect_after' => '2015-06-20 08:00:00',
			'collect_before' => '2015-06-20 11:00:00',
			'deliver_after' => '2015-06-20 18:00:00',
			'deliver_before' => '2015-06-20 21:00:00',
			'published_at' => '2015-06-07 12:00:00'
		]);
		$immediate = new Immediate(['price' => 5]);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		$shipment->specs()->save(Spec::findOrFail(3));
		/* /Veröffentlicht - B > HH - Paket - Lebendig */

		/* Veröffentlicht - B > HH - Paket - Angenommen  */
		/* /Veröffentlicht - B > HH - Paket - Angenommen */

		/* Veröffentlicht - B > HH - Paket - In Zustellung  */
		/* /Veröffentlicht - B > HH - Paket - In Zustellung */

		/* Veröffentlicht - B > HH - Paket - Zugestellt  */
		/* /Veröffentlicht - B > HH - Paket - Zugestellt */
	}

}