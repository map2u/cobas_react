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
    this.state = {
    overlays:props.overlays
    };
    
    this.handleClick=this.handleClick.bind(this);
  }
  handleClick(e) {
    e.preventDefault();
  console.log("clicked");
  }
  
    
  render() {
      
      const overlays=this.props.overlays;
      console.log(overlays);
      const layersRender =(items) => {
         return items.map( (item, index) => layerRender(item, index) );
      }
  const layerRender = (item, index) => {
      return (
        <li key={index} className="layercategory">
                <input type="checkbox" data-level="1"/>
                <div className="layer_legend_icon">

                    <i className="fa fa-minus blue"></i>
                </div>
          <a className="nav-link nav-dropdown-toggle layername_label" href="#" onClick={this.handleClick}>{item.name}</a>
         
        </li>);
    };
    
    return (
              
  
            <div id="ol3-map-layers-list"  ref={el => this.containerEl = el}>

    <div id="ol3-map-layers-basemap-list-title" ><h4><i className="ol3-map-layers-list-icon fa fa-minus blue basemap"></i>Base Map<div className="basemap-name" >--  Open Street Map</div></h4></div>
    <div id="ol3-map-layers-basemap-list"  ref={el => this.containerEl = el}>
        <ul >
            <li className="active">
                <input type="radio" name="basemap" checked="" layer-name="openstreetmap"/><label>Open Street Map</label>
            </li>
        </ul>
    </div>
    <div id="ol3-map-layers-overlays-list-title">
        <h4><i className="ol3-map-layers-list-icon fa fa-minus blue overlays"></i>Overlays
                    </h4>
    </div>
    <div id="ol3-map-layers-overlays-list"  ref={el => this.containerEl = el}>
        <ul className="overlay_ul">
        {layersRender(overlays)}
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
