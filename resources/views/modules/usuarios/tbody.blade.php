                                                   
                                            
                                            <tbody>
                                                @foreach ($items as $item)
                                            <tr>
                                                
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->rol}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-secondary" onclick="agregar_id_usuario({{ $item->id }})"
                                                    data-toggle="modal" data-target="#cambiar_password"> 
                                                     <i class="fa-solid fa-lock"></i>
                                                </a>

                                                </td>

                                                <td>
                                                   <input type="checkbox" class="form-check-input" id="{{ $item->id }}"  {{ $item->activo ? 'checked' : '' }}>
                                                   
                                                </td>
                                                
                                                <td>
                                                    <a href="{{ route('usuarios.edit', $item->id) }}" class="btn btn-warning">
                                                 <i class="fa-solid fa-user-pen"></i>
                                                    </a>

                                                </td>
                                            </tr>
                                           
                                                @endforeach
                                            </tbody>