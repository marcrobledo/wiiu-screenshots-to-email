<?php
const GAME_IDS = array(
    "01A12" => "affordable_space_adventures", //EUR
    "018AB" => "affordable_space_adventures", //USA
    "01456" => "animal_crossing_plaza", //EUR/JAP/USA
    "01C65" => "animal_crossing_amiibo_festival", //EUR
    "01C64" => "animal_crossing_amiibo_festival", //USA
    "01901" => "animal_crossing_amiibo_festival", //JPN
    "010F6" => "assassins_creed_3", //EUR
    "0106B" => "assassins_creed_3", //USA
    "01124" => "assassins_creed_3", //JPN
    "01388" => "assassins_creed_4_black_flag", //EUR
    "0138B" => "assassins_creed_4_black_flag", //USA
    "014C8" => "assassins_creed_4_black_flag", //JPN
    "01113" => "batman_arkham_city_armoured_edition", //EUR
    "010AB" => "batman_arkham_city_armored_edition", //USA
    "01129" => "batman_arkham_city_armoured_edition", //JPN
    "0136C" => "batman_arkham_origins", //EUR
    "0137C" => "batman_arkham_origins", //USA
    "01546" => "batman_arkham_origins", //JPN
    "016D3" => "batman_arkham_origins_blackgate_deluxe_edition", //EUR
    "016DF" => "batman_arkham_origins_blackgate_deluxe_edition", //USA
    "0157F" => "bayonetta", //EUR
    "0157E" => "bayonetta", //USA
    "014DB" => "bayonetta", //JPN
    "01727" => "bayonetta_2", //EUR
    "01726" => "bayonetta_2", //USA
    "011B9" => "bayonetta_2", //JPN
    "01C9B" => "the_binding_of_isaac_rebirth", //EUR
    "01A3C" => "the_binding_of_isaac_rebirth", //USA
    "01DE4" => "the_binding_of_isaac_rebirth", //JPN
    "01134" => "call_of_duty_black_ops_2", //EUR
    "01135" => "call_of_duty_black_ops_2", //EUR
    "01137" => "call_of_duty_black_ops_2", //EUR
    "010CF" => "call_of_duty_black_ops_2", //USA
    "011B4" => "call_of_duty_black_ops_2", //JPN
    "01561" => "call_of_duty_ghosts", //EUR
    "01576" => "call_of_duty_ghosts", //EUR
    "01468" => "call_of_duty_ghosts", //USA
    "01579" => "call_of_duty_ghosts", //JPN
    "01807" => "captain_toad_treasure_tracker", //EUR
    "01806" => "captain_toad_treasure_tracker", //USA
    "01805" => "captain_toad_treasure_tracker", //JPN
    "016EA" => "child_of_light", //EUR
    "015B2" => "child_of_light", //USA
    "016D8" => "child_of_light", //JPN
    "01F97" => "darksiders_warmastered_edition", //EUR
    "01FA6" => "darksiders_warmastered_edition", //USA
    "0110F" => "darksiders_2", //EUR
    "010AD" => "darksiders_2", //USA
    "012B2" => "deus_ex_human_rev_directors_cut", //EUR
    "012BA" => "deus_ex_human_rev_directors_cut", //USA
    "01777" => "devils_third", //EUR
    "01776" => "devils_third", //USA
    "0197D" => "devils_third", //JPN
    "012C4" => "disney_epic_mickey_2", //EUR
    "011B0" => "disney_epic_mickey_2", //EUR
    "0112E" => "disney_epic_mickey_2", //EUR
    "010DB" => "disney_epic_mickey_2", //USA
    "0136D" => "disney_epic_mickey_2", //JPN
    "01383" => "donkey_kong_country_tropical_freeze", //EUR
    "0137F" => "donkey_kong_country_tropical_freeze", //USA
    "01448" => "donkey_kong_country_tropical_freeze", //JPN
    "0152B" => "dr_luigi", //EUR
    "0152A" => "dr_luigi", //USA
    "01503" => "dr_luigi", //JPN
    "01290" => "ducktales_remastered", //USA
    "01292" => "ducktales_remastered", //EUR
    "01D60" => "fast_racing_neo", //EUR
    "01FED" => "fast_racing_neo", //EUR
    "012F0" => "fast_racing_neo", //USA
    "01E41" => "fast_racing_neo", //JPN
    "012B8" => "fist_of_the_north_star_kens_rage_2", //EUR
    "012B9" => "fist_of_the_north_star_kens_rage_2", //USA
    "01D61" => "gunman_clive_hd_collection", //EUR
    "01D09" => "gunman_clive_hd_collection", //USA
    "01DDA" => "gunman_story_hd_collection", //JPN
    "017D9" => "hyrule_warriors", //EUR
    "017D8" => "hyrule_warriors", //USA
    "017CD" => "hyrule_warriors", //JPN
    "0111A" => "injustice_gods_among_us", //EUR
    "01117" => "injustice_gods_among_us", //USA
    "01407" => "injustice_gods_among_us", //JPN
    "01B51" => "kirby_and_the_rainbow_paintbrush", //EUR
    "01ABC" => "kirby_and_the_rainbow_paintbrush", //USA
    "0188B" => "kirby_and_the_rainbow_paintbrush", //JPN
    "01933" => "legend_of_kay_anniversary", //EUR
    "01934" => "legend_of_kay_anniversary", //USA
    "0101B" => "lego_city_undercover", //EUR
    "0101A" => "lego_city_undercover", //USA
    "0142F" => "lego_city_undercover", //JPN
    "01436" => "zelda_wind_waker_hd", //EUR
    "01435" => "zelda_wind_waker_hd", //USA
    "01434" => "zelda_wind_waker_hd", //JPN
    "019E6" => "zelda_twilight_princess_hd", //EUR
    "019E5" => "zelda_twilight_princess_hd", //USA
    "019C8" => "zelda_twilight_princess_hd", //JPN
    "01C95" => "zelda_breath_of_the_wild", //EUR
    "01C94" => "zelda_breath_of_the_wild", //USA
    "01C93" => "zelda_breath_of_the_wild", //JPN
    "014CA" => "zelda_hyrule_historia", //USA
    "01289" => "game_and_wario", //EUR
    "011F2" => "game_and_wario", //USA
    "0112D" => "game_and_wario", //JPN
    "010F5" => "mass_effect_3_special_edition", //EUR
    "010DC" => "mass_effect_3_special_edition", //USA
    "01130" => "mass_effect_3_special_edition", //JPN
    "010C8" => "mario_and_sonic_at_the_sochi_2014_olympic_winter_games", //EUR
    "010C7" => "mario_and_sonic_at_the_sochi_2014_olympic_winter_games", //USA
    "01069" => "mario_and_sonic_at_the_sochi_2014_olympic_winter_games", //JPN
    "01E54" => "mario_and_sonic_at_the_rio_2016_olympic_games", //EUR
    "01E53" => "mario_and_sonic_at_the_rio_2016_olympic_games", //USA
    "01903" => "mario_and_sonic_at_the_rio_2016_olympic_games", //JPN
    "010ED" => "mario_kart_8", //EUR
    "010EC" => "mario_kart_8", //USA
    "010EB" => "mario_kart_8", //JPN
    "0162E" => "mario_party_10", //EUR
    "0162D" => "mario_party_10", //USA
    "01A36" => "mario_tennis_ultra_smash", //EUR
    "01A35" => "mario_tennis_ultra_smash", //USA
    "0178E" => "mario_vs_donkey_kong_tipping_stars", //EUR
    "01792" => "mario_vs_donkey_kong_tipping_stars", //JPN
    "01C5A" => "mighty_no_9", //EUR
    "01C96" => "mighty_no_9", //USA
    "01DD9" => "mighty_no_9", //JPN
    "01282" => "mighty_switch_force_hyper_drive_edition", //EUR
    "011B1" => "mighty_switch_force_hyper_drive_edition", //USA
    "015EB" => "mighty_switch_force_hyper_drive_edition", //JPN
    "014F1" => "mighty_switch_force_2", //EUR
    "014FC" => "mighty_switch_force_2", //USA
    "01C63" => "mini_mario_and_friends_amiibo_challenge", //EUR
    "01C62" => "mini_mario_and_friends_amiibo_challenge", //USA
    "01C61" => "mini_mario_and_friends_amiibo_challenge", //JPN
    "01172" => "monster_hunter_3_ultimate", //EUR
    "01183" => "monster_hunter_3_ultimate", //USA
    "014DA" => "monster_hunter_frontier_g", //JPN
    "01106" => "nano_assault_neo", //EUR
    "01101" => "nano_assault_neo", //USA
    "01364" => "nano_assault_neo", //JPN
    "01284" => "need_for_speed_most_wanted_u", //EUR
    "01288" => "need_for_speed_most_wanted_u", //USA
    "012B7" => "need_for_speed_most_wanted_u", //JPN
    "01461" => "nes_remix", //EUR
    "01460" => "nes_remix", //USA
    "0145F" => "nes_remix", //JPN
    "01626" => "nes_remix_2", //EUR
    "01625" => "nes_remix_2", //USA
    "01624" => "nes_remix_2", //JPN
    "01628" => "nes_remix_pack", //USA
    "01627" => "nes_remix_pack", //JPN
    "0101E" => "new_super_mario_bros_u", //EUR
    "0101D" => "new_super_mario_bros_u", //USA
    "0101C" => "new_super_mario_bros_u", //JPN
    "014B8" => "new_super_mario_bros_u_new_super_luigi_u", //EUR
    "014B7" => "new_super_mario_bros_u_new_super_luigi_u", //USA
    "01424" => "new_super_luigi_u", //EUR
    "01423" => "new_super_luigi_u", //USA
    "0110B" => "ninja_gaiden_3_razors_edge", //EUR
    "0139B" => "ninja_gaiden_3_razors_edge", //EUR
    "0110A" => "ninja_gaiden_3_razors_edge", //USA
    "01109" => "ninja_gaiden_3_razors_edge", //JPN
    "01021" => "nintendo_land", //EUR
    "01020" => "nintendo_land", //USA
    "0101F" => "nintendo_land", //JPN
    "01479" => "pac_man_and_the_ghostly_adventures", //EUR
    "01463" => "pac_man_and_the_ghostly_adventures", //USA
    "014F3" => "pac_man_and_the_ghostly_adventures", //JPN
    "017E5" => "pac_man_and_the_ghostly_adventures_2", //EUR
    "017E6" => "pac_man_and_the_ghostly_adventures_2", //USA
    "01823" => "pac_man_and_the_ghostly_adventures_2", //JPN
    "F600B" => "paper_mario_color_splash", //EUR
    "F600A" => "paper_mario_color_splash", //USA
    "F6009" => "paper_mario_color_splash", //JPN
    "012BE" => "pikmin_3", //EUR
    "012BD" => "pikmin_3", //USA
    "012BC" => "pikmin_3", //JPN
    "01619" => "pikmin_short_movies_hd", //EUR
    "01618" => "pikmin_short_movies_hd", //USA
    "01617" => "pikmin_short_movies_hd", //JPN
    "01DF5" => "pokken_tournament", //EUR
    "01DF4" => "pokken_tournament", //USA
    "01C58" => "pokken_tournament", //JPN
    "01D03" => "project_zero_maiden_of_black_water", //EUR
    "01D06" => "fatal_frame_maiden_of_black_water", //USA
    "014D2" => "fatal_frame_maiden_of_black_water", //JPN
    "01720" => "pullblox_world", //EUR
    "0171F" => "pushmo_world", //USA
    "01114" => "rayman_legends", //EUR
    "010B1" => "rayman_legends", //USA
    "01126" => "rayman_legends", //JPN
    "012B4" => "resident_evil_revelations", //EUR
    "012CF" => "resident_evil_revelations", //USA
    "0112D" => "biohazard_revelations_unveiled_edition", //JPN
    "01C40" => "rodea_the_sky_soldier", //EUR
    "01BF6" => "rodea_the_sky_soldier", //USA
    "018C5" => "rodea_the_sky_soldier", //JPN
    "01D6D" => "runbow", //EUR
    "01830" => "runbow", //USA
    "01DD7" => "runbow", //JPN
    "0205C" => "runbow_deluxe_edition", //USA
    "0178F" => "shovel_knight", //EUR
    "016E1" => "shovel_knight", //USA
    "01D93" => "shovel_knight", //JPN
    "0111F" => "sonic_and_all_stars_racing_transformed", //EUR
    "010B3" => "sonic_and_all_stars_racing_transformed", //USA
    "015B4" => "sonic_and_all_stars_racing_transformed", //JPN
    "01778" => "sonic_boom_rise_of_lyric", //EUR
    "0175B" => "sonic_boom_rise_of_lyric", //USA
    "012B1" => "sonic_lost_world", //EUR
    "0128F" => "sonic_lost_world", //USA
    "01357" => "sonic_lost_world", //JPN
    "0176A" => "splatoon", //EUR
    "01769" => "splatoon", //USA
    "0162B" => "splatoon", //JPN
    "01B05" => "star_fox_zero", //EUR
    "01B04" => "star_fox_zero", //USA
    "01BED" => "star_fox_guard", //EUR
    "01BEC" => "star_fox_guard", //USA
    "01BEB" => "star_fox_guard", //JPN
    "0145D" => "super_mario_3d_world", //EUR
    "0145C" => "super_mario_3d_world", //USA
    "01061" => "super_mario_3d_world", //JPN
    "018DD" => "super_mario_maker", //EUR
    "018DC" => "super_mario_maker", //USA
    "018DB" => "super_mario_maker", //JPN
    "01450" => "super_smash_bros_for_wii_u", //EUR
    "0144F" => "super_smash_bros_for_wii_u", //USA
    "0110E" => "super_smash_bros_for_wii_u", //JPN
    "0128C" => "tank_tank_tank", //EUR
    "01338" => "tank_tank_tank", //USA
    "012F2" => "tank_tank_tank", //JPN
    "010F8" => "tekken_tag_tournament_2_wiiu_edition", //EUR
    "01100" => "tekken_tag_tournament_2_wiiu_edition", //USA
    "01006" => "tekken_tag_tournament_2_wiiu_edition", //JPN
    "01ED7" => "tokyo_mirage_sessions_fe", //EUR
    "01ED8" => "tokyo_mirage_sessions_fe", //USA
    "0131D" => "tokyo_mirage_sessions_fe", //JPN
    "0112B" => "warriors_orochi_3_hyper", //EUR
    "01102" => "warriors_orochi_3_hyper", //USA
    "010EA" => "warriors_orochi_3_hyper", //JPN
    "01405" => "watch_dogs", //EUR
    "01420" => "watch_dogs", //USA
    "014C0" => "watch_dogs", //JPN
    "01024" => "wii_fit_u", //EUR
    "01023" => "wii_fit_u", //USA
    "01022" => "wii_fit_u", //JPN
    "0137E" => "wii_party_u", //EUR
    "0137D" => "wii_party_u", //USA
    "011A8" => "wii_party_u", //JPN
    "0144E" => "wii_sports_club", //EUR
    "0144D" => "wii_sports_club", //USA
    "012F1" => "wii_sports_club", //JPN
    "01353" => "the_wonderful_101", //EUR
    "012DC" => "the_wonderful_101", //USA
    "01163" => "the_wonderful_101", //JPN
    "01C4C" => "xenoblade_chronicles_x", //EUR
    "01C4D" => "xenoblade_chronicles_x", //USA
    "01161" => "xenoblade_x", //JPN
    "0184E" => "yoshis_woolly_world", //EUR
    "0184D" => "yoshis_woolly_world", //USA
    "0131F" => "yoshis_woolly_world", //JPN
    "010EF" => "zombiu", //EUR
    "011A7" => "zombiu", //EUR
    "010DD" => "zombiu", //USA
    "01123" => "zombiu" //JPN
);
