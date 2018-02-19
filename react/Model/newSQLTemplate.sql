/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  josephzhao
 * Created: 2-Nov-2016
 */

cvcbrowser3=# alter table map2u_core__category_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__city_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__country_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__layer_category_translation drop column id; 
ALTER TABLE
cvcbrowser3=# ALTER TABLE map2u_core__layer_category_translation ADD id UUID;
ALTER TABLE
cvcbrowser3=# update map2u_core__layer_category_translation set id = uuid_generate_v4();
UPDATE 1
cvcbrowser3=# alter table map2u_core__layer_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__map_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__region_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__sidebar_menu_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__state_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__story_translation drop column id;
ALTER TABLE
cvcbrowser3=# alter table map2u_core__symbolizedlayer_translation drop column id;
