/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import * as React from 'react';
import * as ol from 'openlayers';


export class LayerList extends React.Component<any, any> {
  containerEl: HTMLElement;
  contentEl: HTMLElement;

  constructor(props) { 
    super(props);
  }

  render() {
    return (
              
  
            <div id="ol3-map-layers-list"  ref={el => this.containerEl = el}>

    <div id="ol3-map-layers-basemap-list-title" style="border-bottom: 1px dotted gainsboro;"><h4><i className="ol3-map-layers-list-icon fa fa-minus blue basemap"></i>Base Map<div className="basemap-name" style="display:inline-block;margin-left: 20px;font-size: 16px;">--  Open Street Map</div></h4></div>
    <div id="ol3-map-layers-basemap-list"  ref={el => this.containerEl = el}>
        <ul style="list-style: none;padding-left: 10px;">
            <li className="active">
                <input type="radio" name="basemap" checked="" layer-name="openstreetmap"/><label>Open Street Map</label>
            </li>
                    </ul>
    </div>
    <div id="ol3-map-layers-overlays-list-title" style="border-bottom: 1px dotted gainsboro;">
        <h4><i className="ol3-map-layers-list-icon fa fa-minus blue overlays"></i>Overlays
                    </h4>
    </div>
    <div id="ol3-map-layers-overlays-list"  ref={el => this.containerEl = el}>
        <ul className="overlay_ul" style="list-style: none;padding-left: 10px;">
                                                                        <li className="layercategory" data-type="category" data-level="1" data-id="a7bd77f1-09a5-46dd-9561-7eccc341e9a8" data-multiple="1">
                            <input type="checkbox" data-level="1"/>
                            <div className="layer_legend_icon">

                                <i className="fa fa-minus blue"></i>
                            </div>
                            <div style="display: inline-block;" className="layername_label group_layername_label">
                                <label className="layercategory" data-level="1">ECOLOGICAL
                                    <span data-id="a7bd77f1-09a5-46dd-9561-7eccc341e9a8" className="layercategory-action pull-right">

                                        <div className="layer_action_icon">
                                            <i className="fa fa-arrow-down lightBlue" title="Move this group down"></i>
                                            <i className="fa fa-arrow-up lightBlue" title="Move this group up"></i>
                                            <i className="fa fa-times red " title="Remove this group from map"></i>
                                        </div>
                                    </span>
                                </label>
                            </div>
                            <ul className="layercategory_ul" data-type="category" data-id="a7bd77f1-09a5-46dd-9561-7eccc341e9a8">
                                                                                                                                            
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="acbf73e5-14e7-4fb6-97f5-326d37caf28e" data-position="5" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="acbf73e5-14e7-4fb6-97f5-326d37caf28e">

                                                                                                    <input data-id="acbf73e5-14e7-4fb6-97f5-326d37caf28e" data-level="2" data-multiple="true" name="Flood Damage Centres" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Flood Damage Centres</label>
                                                    <span data-id="acbf73e5-14e7-4fb6-97f5-326d37caf28e" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="dbaa636c-9639-4b9a-8762-9e90db9e796d" data-position="7" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="dbaa636c-9639-4b9a-8762-9e90db9e796d">

                                                                                                    <input data-id="dbaa636c-9639-4b9a-8762-9e90db9e796d" data-level="2" data-multiple="true" name="Water Courses" data-show="on" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Water Courses</label>
                                                    <span data-id="dbaa636c-9639-4b9a-8762-9e90db9e796d" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="2d752f49-247d-4f68-b30e-0be62fad9cb9" data-position="8" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="2d752f49-247d-4f68-b30e-0be62fad9cb9">

                                                                                                    <input data-id="2d752f49-247d-4f68-b30e-0be62fad9cb9" data-level="2" data-multiple="true" name="Water Bodies" data-show="on" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Water Bodies</label>
                                                    <span data-id="2d752f49-247d-4f68-b30e-0be62fad9cb9" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="a7fa60c5-10fa-42e4-a128-4c58257dca17" data-position="12" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="mvt_vector_tile" data-layer_id="a7fa60c5-10fa-42e4-a128-4c58257dca17">

                                                                                                    <input data-id="a7fa60c5-10fa-42e4-a128-4c58257dca17" data-level="2" data-multiple="true" name="Urban Canopy Cover (%)" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Urban Canopy Cover (%)</label>
                                                    <span data-id="a7fa60c5-10fa-42e4-a128-4c58257dca17" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="9b80c2a1-6821-49f9-bf9e-7b4d69ca7db3" data-position="16" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="9b80c2a1-6821-49f9-bf9e-7b4d69ca7db3">

                                                                                                    <input data-id="9b80c2a1-6821-49f9-bf9e-7b4d69ca7db3" data-level="2" data-multiple="true" name="Credit River Subwatersheds" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Credit River Subwatersheds</label>
                                                    <span data-id="9b80c2a1-6821-49f9-bf9e-7b4d69ca7db3" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="213ce3f3-a88f-4ae1-8adf-e4cc95846594" data-position="17" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="213ce3f3-a88f-4ae1-8adf-e4cc95846594">

                                                                                                    <input data-id="213ce3f3-a88f-4ae1-8adf-e4cc95846594" data-level="2" data-multiple="true" name="Credit River Watershed" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Credit River Watershed</label>
                                                    <span data-id="213ce3f3-a88f-4ae1-8adf-e4cc95846594" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                                        </ul>
                        </li>
                                                                                <li className="layercategory" data-type="category" data-level="1" data-id="8fff9d4b-3a79-4498-8fd9-eb84d2f50a7e" data-multiple="">
                            <input type="checkbox" data-level="1"/>
                            <div className="layer_legend_icon">

                                <i className="fa fa-minus blue"></i>
                            </div>
                            <div style="display: inline-block;" className="layername_label group_layername_label">
                                <label className="layercategory" data-level="1">CENSUS DATA
                                    <span data-id="8fff9d4b-3a79-4498-8fd9-eb84d2f50a7e" className="layercategory-action pull-right">

                                        <div className="layer_action_icon">
                                            <i className="fa fa-arrow-down lightBlue" title="Move this group down"></i>
                                            <i className="fa fa-arrow-up lightBlue" title="Move this group up"></i>
                                            <i className="fa fa-times red " title="Remove this group from map"></i>
                                        </div>
                                    </span>
                                </label>
                            </div>
                            <ul className="layercategory_ul" data-type="category" data-id="8fff9d4b-3a79-4498-8fd9-eb84d2f50a7e">
                                                                    
                                                                                    <li style="border-bottom: 1px dotted grey;" data-type="category" data-level="2" className="layercategory" data-category="true" data-id="2aabd826-9fba-410d-a773-637a11b4895f" data-layertype="" data-multiple="">
                                                                                                    <input data-id="2aabd826-9fba-410d-a773-637a11b4895f" data-level="2" data-multiple="" name="Census Data" type="radio"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-minus blue"></i>
                                                </div>
                                                <div style="display: inline-block;" className="layername_label group_layername_label">
                                                    <label className="layercategory" data-level="2">TRANSPORTATION
                                                        <span data-id="2aabd826-9fba-410d-a773-637a11b4895f" className="layercategory-action pull-right">

                                                            <div className="layer_action_icon">
                                                                <i className="fa fa-arrow-down lightBlue" title="Move this group down"></i>
                                                                <i className="fa fa-arrow-up lightBlue" title="Move this group up"></i>
                                                                <i className="fa fa-times red " title="Remove this group from map"></i>
                                                            </div>
                                                        </span>
                                                    </label>
                                                </div>
                                                                                                    <ul className="group_overlay_lilayersubcategory_ul" data-type="layer" data-id="2aabd826-9fba-410d-a773-637a11b4895f">

                                                                                                                                                                                    <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="eabf9df2-390f-4be0-9ec5-5d6ced3f56c9" data-position="32" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="eabf9df2-390f-4be0-9ec5-5d6ced3f56c9">
                                                                                                                                            <input data-id="eabf9df2-390f-4be0-9ec5-5d6ced3f56c9" data-level="3" data-multiple="true" name="Transportation" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>Commute By Car As Driver (% Of Total Pop.)</label>
                                                                        <span data-id="eabf9df2-390f-4be0-9ec5-5d6ced3f56c9" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                                                                                                <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="c0c16cc2-b074-465d-a26a-759d4f4844be" data-position="33" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="c0c16cc2-b074-465d-a26a-759d4f4844be">
                                                                                                                                            <input data-id="c0c16cc2-b074-465d-a26a-759d4f4844be" data-level="3" data-multiple="true" name="Transportation" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>Commute By Car As Passenger (% Of Total Pop.)</label>
                                                                        <span data-id="c0c16cc2-b074-465d-a26a-759d4f4844be" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                                                                                                <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="30393b11-9e9c-4b08-9fcf-605a5d2a4073" data-position="34" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="30393b11-9e9c-4b08-9fcf-605a5d2a4073">
                                                                                                                                            <input data-id="30393b11-9e9c-4b08-9fcf-605a5d2a4073" data-level="3" data-multiple="true" name="Transportation" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>Transit Commuters (% Of Total Pop.)</label>
                                                                        <span data-id="30393b11-9e9c-4b08-9fcf-605a5d2a4073" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                                                                                                <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="3c2d4a7f-7d5a-4a09-a856-95ff1cfcdc97" data-position="35" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="3c2d4a7f-7d5a-4a09-a856-95ff1cfcdc97">
                                                                                                                                            <input data-id="3c2d4a7f-7d5a-4a09-a856-95ff1cfcdc97" data-level="3" data-multiple="true" name="Transportation" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>Walking Commuters (% Total Pop.)</label>
                                                                        <span data-id="3c2d4a7f-7d5a-4a09-a856-95ff1cfcdc97" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                        </ul>
                                                                                            </li>
                                                                            
                                                                                    <li style="border-bottom: 1px dotted grey;" data-type="category" data-level="2" className="layercategory" data-category="true" data-id="2f09556e-a7f8-47cf-abd9-0381717179c7" data-layertype="" data-multiple="">
                                                                                                    <input data-id="2f09556e-a7f8-47cf-abd9-0381717179c7" data-level="2" data-multiple="" name="Census Data" type="radio"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-minus blue"></i>
                                                </div>
                                                <div style="display: inline-block;" className="layername_label group_layername_label">
                                                    <label className="layercategory" data-level="2">DEMOGRAPHICS
                                                        <span data-id="2f09556e-a7f8-47cf-abd9-0381717179c7" className="layercategory-action pull-right">

                                                            <div className="layer_action_icon">
                                                                <i className="fa fa-arrow-down lightBlue" title="Move this group down"></i>
                                                                <i className="fa fa-arrow-up lightBlue" title="Move this group up"></i>
                                                                <i className="fa fa-times red " title="Remove this group from map"></i>
                                                            </div>
                                                        </span>
                                                    </label>
                                                </div>
                                                                                                    <ul className="group_overlay_lilayersubcategory_ul" data-type="layer" data-id="2f09556e-a7f8-47cf-abd9-0381717179c7">

                                                                                                                                                                                    <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="f436e721-009f-4a71-bfc9-991c85f00c6e" data-position="25" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="f436e721-009f-4a71-bfc9-991c85f00c6e">
                                                                                                                                            <input data-id="f436e721-009f-4a71-bfc9-991c85f00c6e" data-level="3" data-multiple="true" name="Demographics" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>Median Age</label>
                                                                        <span data-id="f436e721-009f-4a71-bfc9-991c85f00c6e" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                                                                                                <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="7332ecfe-991d-4c8e-a028-07b4639d8bba" data-position="26" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="7332ecfe-991d-4c8e-a028-07b4639d8bba">
                                                                                                                                            <input data-id="7332ecfe-991d-4c8e-a028-07b4639d8bba" data-level="3" data-multiple="true" name="Demographics" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>Total Population</label>
                                                                        <span data-id="7332ecfe-991d-4c8e-a028-07b4639d8bba" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                                                                                                <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="962098f0-3dd1-46f6-88b2-350b378ec468" data-position="28" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="962098f0-3dd1-46f6-88b2-350b378ec468">
                                                                                                                                            <input data-id="962098f0-3dd1-46f6-88b2-350b378ec468" data-level="3" data-multiple="true" name="Demographics" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>% Pop. 0-14 Yrs</label>
                                                                        <span data-id="962098f0-3dd1-46f6-88b2-350b378ec468" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                                                                                                <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="08651d09-8fe7-47aa-8a66-b1f4c8c5f42c" data-position="29" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="08651d09-8fe7-47aa-8a66-b1f4c8c5f42c">
                                                                                                                                            <input data-id="08651d09-8fe7-47aa-8a66-b1f4c8c5f42c" data-level="3" data-multiple="true" name="Demographics" data-show="on" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>% Pop. 65+ Yrs</label>
                                                                        <span data-id="08651d09-8fe7-47aa-8a66-b1f4c8c5f42c" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                                                                                                <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="3" className="overlay_li" data-category="true" data-id="235c9ff3-baff-4e9b-bb35-aa4b3e68218a" data-position="30" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer-id="235c9ff3-baff-4e9b-bb35-aa4b3e68218a">
                                                                                                                                            <input data-id="235c9ff3-baff-4e9b-bb35-aa4b3e68218a" data-level="3" data-multiple="true" name="Demographics" type="radio"/>
                                                                                                                                        <div className="layer_legend_icon">
                                                                        <i className="fa fa-plus blue"></i>

                                                                    </div>

                                                                    <div style="display: inline-block;" className="subgroup_layername_label layername_label">
                                                                        <label>% Pop. 15-34 Yrs</label>
                                                                        <span data-id="235c9ff3-baff-4e9b-bb35-aa4b3e68218a" className="layer-action pull-right">
                                                                            <div className="layer_action_icon">
                                                                                <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                                                <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                                                <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                                                <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                                                <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                                                <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                                                <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <div className="layer_legend">
                                                                    </div>
                                                                </li>
                                                                                                                                                                        </ul>
                                                                                            </li>
                                                                                                                                                                                                                        
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="6418b3f7-07b2-4030-8290-18f88bc4c5db" data-position="27" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="6418b3f7-07b2-4030-8290-18f88bc4c5db">

                                                                                                    <input data-id="6418b3f7-07b2-4030-8290-18f88bc4c5db" data-level="2" data-multiple="false" name="Census Data" type="radio"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Population Density (Persons/hectare)</label>
                                                    <span data-id="6418b3f7-07b2-4030-8290-18f88bc4c5db" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="b3710fad-fafc-46c1-b1a2-a048a402ca2c" data-position="31" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="b3710fad-fafc-46c1-b1a2-a048a402ca2c">

                                                                                                    <input data-id="b3710fad-fafc-46c1-b1a2-a048a402ca2c" data-level="2" data-multiple="false" name="Census Data" type="radio"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>% Owned Homes</label>
                                                    <span data-id="b3710fad-fafc-46c1-b1a2-a048a402ca2c" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                                        </ul>
                        </li>
                                                                                <li className="layercategory" data-type="category" data-level="1" data-id="9400f59f-b083-42e6-b94b-d0336dce4aaa" data-multiple="1">
                            <input type="checkbox" data-level="1"/>
                            <div className="layer_legend_icon">

                                <i className="fa fa-minus blue"></i>
                            </div>
                            <div style="display: inline-block;" className="layername_label group_layername_label">
                                <label className="layercategory" data-level="1">SOCIAL
                                    <span data-id="9400f59f-b083-42e6-b94b-d0336dce4aaa" className="layercategory-action pull-right">

                                        <div className="layer_action_icon">
                                            <i className="fa fa-arrow-down lightBlue" title="Move this group down"></i>
                                            <i className="fa fa-arrow-up lightBlue" title="Move this group up"></i>
                                            <i className="fa fa-times red " title="Remove this group from map"></i>
                                        </div>
                                    </span>
                                </label>
                            </div>
                            <ul className="layercategory_ul" data-type="category" data-id="9400f59f-b083-42e6-b94b-d0336dce4aaa">
                                                                                                                                            
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="f7a3eb45-2739-4e8f-bfcc-c17a3dbcdbcb" data-position="1" data-image_layer="" data-show_label="" data-label_field="" data-layertype="cluster" data-layerformat="" data-layer_id="f7a3eb45-2739-4e8f-bfcc-c17a3dbcdbcb">

                                                                                                    <input data-id="f7a3eb45-2739-4e8f-bfcc-c17a3dbcdbcb" data-level="2" data-multiple="true" name="Recreation Areas" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Recreation Areas</label>
                                                    <span data-id="f7a3eb45-2739-4e8f-bfcc-c17a3dbcdbcb" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="929087ac-c167-4058-9faf-3faadfcff5e5" data-position="2" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="929087ac-c167-4058-9faf-3faadfcff5e5">

                                                                                                    <input data-id="929087ac-c167-4058-9faf-3faadfcff5e5" data-level="2" data-multiple="true" name="Trail Heads" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Trail Heads</label>
                                                    <span data-id="929087ac-c167-4058-9faf-3faadfcff5e5" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="690fa9c9-4be0-4a5a-8965-acc625e4d2b9" data-position="3" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="690fa9c9-4be0-4a5a-8965-acc625e4d2b9">

                                                                                                    <input data-id="690fa9c9-4be0-4a5a-8965-acc625e4d2b9" data-level="2" data-multiple="true" name="Trails" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Trails</label>
                                                    <span data-id="690fa9c9-4be0-4a5a-8965-acc625e4d2b9" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="0369e990-a24e-4201-aea0-021d4837b74f" data-position="4" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="0369e990-a24e-4201-aea0-021d4837b74f">

                                                                                                    <input data-id="0369e990-a24e-4201-aea0-021d4837b74f" data-level="2" data-multiple="true" name="WEPGN Project Study Areas" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Wepgn Project Study Areas</label>
                                                    <span data-id="0369e990-a24e-4201-aea0-021d4837b74f" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="1ad902b9-c0ec-4eb4-8e1a-3fdfd7f355a4" data-position="6" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="1ad902b9-c0ec-4eb4-8e1a-3fdfd7f355a4">

                                                                                                    <input data-id="1ad902b9-c0ec-4eb4-8e1a-3fdfd7f355a4" data-level="2" data-multiple="true" name="Regional Parks" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Regional Parks</label>
                                                    <span data-id="1ad902b9-c0ec-4eb4-8e1a-3fdfd7f355a4" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="53753994-4d30-4b9f-8c6d-0a01489e2c7d" data-position="14" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="53753994-4d30-4b9f-8c6d-0a01489e2c7d">

                                                                                                    <input data-id="53753994-4d30-4b9f-8c6d-0a01489e2c7d" data-level="2" data-multiple="true" name="Municipalities" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Municipalities</label>
                                                    <span data-id="53753994-4d30-4b9f-8c6d-0a01489e2c7d" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                    
                                            <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="2" className="overlay_li" data-category="true" data-id="5170fb17-1a27-480b-8e21-e854c9d81337" data-position="15" data-image_layer="" data-show_label="" data-label_field="" data-layertype="spatialfile" data-layerformat="" data-layer_id="5170fb17-1a27-480b-8e21-e854c9d81337">

                                                                                                    <input data-id="5170fb17-1a27-480b-8e21-e854c9d81337" data-level="2" data-multiple="true" name="Regional Municipalities" type="checkbox"/>
                                                                                                <div className="layer_legend_icon">
                                                    <i className="fa fa-plus blue"></i>
                                                </div>

                                                <div style="display: inline-block;" className="group_layername_label layername_label">
                                                    <label>Regional Municipalities</label>
                                                    <span data-id="5170fb17-1a27-480b-8e21-e854c9d81337" className="layer-action pull-right">
                                                        <div className="layer_action_icon">
                                                            <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                                            <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                                            <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                                            <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                                            <i className="fa fa-times red " title="Remove this layer from map"></i>
                                                            <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                                            <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div className="layer_legend">
                                                </div>
                                            </li>
                                                                                                                                        </ul>
                        </li>
                                                                                                
                        <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="1" className="overlay_li" data-category="true" data-id="8db53ec5-30fa-4ee9-a999-9772641a5956" data-position="13" data-image_layer="" data-show_label="" data-label_field="" data-layertype="geoserver" data-layerformat="" data-hostname="cvc.juturna.ca:8080/geoserver/juturna3.0/wms" data-layername="juturna3.0:Land_Use_20130531" data-layer_id="8db53ec5-30fa-4ee9-a999-9772641a5956">

                            <input data-id="8db53ec5-30fa-4ee9-a999-9772641a5956" data-level="1" data-multiple="true" name="Land Use" type="checkbox"/>
                            <div className="layer_legend_icon">
                                <i className="fa fa-plus blue"></i>
                            </div>

                            <div style="display: inline-block;" className="layername_label">
                                <label>Land Use</label>
                                <span data-id="8db53ec5-30fa-4ee9-a999-9772641a5956" className="layer-action pull-right">
                                    <div className="layer_action_icon">
                                        <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                        <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                        <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                        <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                        <i className="fa fa-times red " title="Remove this layer from map"></i>
                                        <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                        <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                    </div>
                                </span>
                            </div>
                            <div className="layer_legend">
                            </div>
                        </li>
                                                        
                        <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="1" className="overlay_li" data-category="true" data-id="14c5ac57-abd0-4428-b7b1-8d5caf8e5b75" data-position="11" data-image_layer="" data-show_label="" data-label_field="" data-layertype="geoserver" data-layerformat="" data-hostname="cvc.juturna.ca:8080/geoserver/juturna3.0/wms" data-layername="juturna3.0:Impervious_Surfaces_20140924" data-layer_id="14c5ac57-abd0-4428-b7b1-8d5caf8e5b75">

                            <input data-id="14c5ac57-abd0-4428-b7b1-8d5caf8e5b75" data-level="1" data-multiple="true" name="Impervious Surfaces" type="checkbox"/>
                            <div className="layer_legend_icon">
                                <i className="fa fa-plus blue"></i>
                            </div>

                            <div style="display: inline-block;" className="layername_label">
                                <label>Impervious Surfaces</label>
                                <span data-id="14c5ac57-abd0-4428-b7b1-8d5caf8e5b75" className="layer-action pull-right">
                                    <div className="layer_action_icon">
                                        <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                        <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                        <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                        <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                        <i className="fa fa-times red " title="Remove this layer from map"></i>
                                        <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                        <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                    </div>
                                </span>
                            </div>
                            <div className="layer_legend">
                            </div>
                        </li>
                                                        
                        <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="1" className="overlay_li" data-category="true" data-id="616f079e-d086-43ac-b065-a74fe5d88e6a" data-position="10" data-image_layer="" data-show_label="" data-label_field="" data-layertype="geoserver" data-layerformat="" data-hostname="cvc.juturna.ca:8080/geoserver/juturna3.0/wms" data-layername="juturna3.0:Land_use_mosquito" data-layer_id="616f079e-d086-43ac-b065-a74fe5d88e6a">

                            <input data-id="616f079e-d086-43ac-b065-a74fe5d88e6a" data-level="1" data-multiple="true" name="Potential Mosquito Habitat" type="checkbox"/>
                            <div className="layer_legend_icon">
                                <i className="fa fa-plus blue"></i>
                            </div>

                            <div style="display: inline-block;" className="layername_label">
                                <label>Potential Mosquito Habitat</label>
                                <span data-id="616f079e-d086-43ac-b065-a74fe5d88e6a" className="layer-action pull-right">
                                    <div className="layer_action_icon">
                                        <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                        <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                        <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                        <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                        <i className="fa fa-times red " title="Remove this layer from map"></i>
                                        <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                        <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                    </div>
                                </span>
                            </div>
                            <div className="layer_legend">
                            </div>
                        </li>
                                                        
                        <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="1" className="overlay_li" data-category="true" data-id="0cbba336-b0c7-43fc-a2b3-d9a0ded19505" data-position="15" data-image_layer="" data-show_label="" data-label_field="" data-layertype="story" data-layerformat="" data-layer_id="0cbba336-b0c7-43fc-a2b3-d9a0ded19505">

                            <input data-id="0cbba336-b0c7-43fc-a2b3-d9a0ded19505" data-level="1" data-multiple="true" name="Stories" type="checkbox"/>
                            <div className="layer_legend_icon">
                                <i className="fa fa-plus blue"></i>
                            </div>

                            <div style="display: inline-block;" className="layername_label">
                                <label>Stories</label>
                                <span data-id="0cbba336-b0c7-43fc-a2b3-d9a0ded19505" className="layer-action pull-right">
                                    <div className="layer_action_icon">
                                        <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                        <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                        <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                        <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                        <i className="fa fa-times red " title="Remove this layer from map"></i>
                                        <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                        <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                    </div>
                                </span>
                            </div>
                            <div className="layer_legend">
                            </div>
                        </li>
                                                        
                        <li style="border-bottom: 1px dotted grey;" data-type="layer" data-level="1" className="overlay_li" data-category="true" data-id="8f9f3f4c-82f1-403d-b996-50e41c222769" data-position="1" data-image_layer="" data-show_label="" data-label_field="" data-layertype="story" data-layerformat="" data-layer_id="8f9f3f4c-82f1-403d-b996-50e41c222769">

                            <input data-id="8f9f3f4c-82f1-403d-b996-50e41c222769" data-level="1" data-multiple="true" name="Local Food" type="checkbox"/>
                            <div className="layer_legend_icon">
                                <i className="fa fa-plus blue"></i>
                            </div>

                            <div style="display: inline-block;" className="layername_label">
                                <label>Local Food</label>
                                <span data-id="8f9f3f4c-82f1-403d-b996-50e41c222769" className="layer-action pull-right">
                                    <div className="layer_action_icon">
                                        <i className="fa fa-map-marker lightBlue" title="Zoom to this layer's extent"></i>
                                        <i className="fa fa-pencil lightBlue" title="Edit this layer feature style"></i>
                                        <i className="fa fa-list lightBlue" title="View this layer detail info"></i>
                                        <i className="fa fa-tag lightBlue" title="Show/Hide feature label"></i>
                                        <i className="fa fa-times red " title="Remove this layer from map"></i>
                                        <i className="fa fa-arrow-down lightBlue" title="Move this layer down"></i>
                                        <i className="fa fa-arrow-up lightBlue" title="Move this layer up"></i>
                                    </div>
                                </span>
                            </div>
                            <div className="layer_legend">
                            </div>
                        </li>
               </ul>
    </div>
</div>
            

    );
  }

  setContents(html) {
    this.contentEl.innerHTML = html;
  }

  show(bottomDistance: string = '12px') {
    this.containerEl.style.bottom = bottomDistance;
    this.containerEl.style.display = 'block';
  }

  hide() {
    this.containerEl.style.display = 'block';
  }
}
