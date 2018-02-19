import * as React from 'react';
import * as ol from 'openlayers';
import {Util} from '../util';
import {Map} from '../map';
import PropTypes from 'prop-types';

export class OverviewMap extends React.Component<any, any> {

  control: ol.control.OverviewMap;

  options:  {
    collapsed: undefined,
    collapseLabel: undefined,
    collapsible  : undefined,
    label: undefined,
    layers: undefined,
    render: undefined,
    target: undefined,
    tipLabel: undefined,
    view: undefined
  };

  events:  {
    'change': undefined,
    'propertychange': undefined
  };

  constructor(props) { super(props); }

  render() { return null; }

  componentDidMount () {
    let options = Util.getOptions(Object['assign'](this.options, this.props));
    this.control = new ol.control.OverviewMap(options);
    this.context.mapComp.controls.push(this.control)

    let olEvents = Util.getEvents(this.events, this.props);
    for(let eventName in olEvents) {
      this.control.on(eventName, olEvents[eventName]);
    }
  }

}

OverviewMap['contextTypes'] = {
  mapComp: PropTypes.instanceOf(Map),
  map: PropTypes.instanceOf(ol.Map)
};
